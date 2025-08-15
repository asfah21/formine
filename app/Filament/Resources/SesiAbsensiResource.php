<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SesiAbsensiResource\Pages;
use App\Models\SesiAbsensi;
use App\Models\Absensi;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Support\Str;
use Filament\Support\Enums\ActionSize;

use Carbon\Carbon;

class SesiAbsensiResource extends Resource
{
    protected static ?string $model = SesiAbsensi::class;

    protected static ?string $navigationGroup = 'Daftar Hadir Online';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationLabel = 'Daftar Hadir';

    // protected static ?string $slug = 'daftar-hadir';
    protected static ?string $label = 'Daftar Hadir';

    public static function canAccess(): bool
    {
        return auth()->user()?->role === 'super_admin';
        // return in_array(auth()->user()?->role, ['super_admin', 'admin']);
    }

    public static function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nama Anda')
                ->required()
                ->maxLength(255),

            Select::make('agenda')
                ->label('Jenis Daftar Hadir')
                ->options([
                    'P5M' => 'P5M',
                    'Rapat' => 'Rapat',
                ])
                ->required(),

            TextInput::make('judul')
                ->label('Judul Daftar Hadir')
                ->required()
                ->maxLength(255),

            Select::make('lokasi')
                ->label('Pilih Lokasi')
                ->options([
                    'Office Samaenre'=>'Office Samaenre',
                    'Parkiran PDM'=>'Parkiran PDM',
                    'Workshop Ruby'=>'Workshop Ruby',
                    'Amethys'=>'Amethys',
                    'IUP Ceria' =>'IUP Ceria',
                    'Lainnya'=>'Lainnya',
                ])
                ->required(),

            Select::make('duration')
                ->label('Durasi (jam)')
                ->options([
                    1 => '1 Jam',
                    2 => '2 Jam',
                    3 => '3 Jam',
                    4 => '4 Jam',
                    5 => '5 Jam',
                    6 => '6 Jam',
                ])
                ->required(),

            DateTimePicker::make('start_time')
                ->label('Waktu Mulai')
                ->required(),

            // DateTimePicker::make('end_time')
            //     ->label('Waktu Berakhir')
            //     ->disabled(),
        ]);
    }



    public static function table(\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table->columns([
            TextColumn::make('no')
                ->label('No')
                ->rowIndex(),
            TextColumn::make('judul')
                ->label('Daftar Hadir')
                ->sortable()
                ->searchable(),
            TextColumn::make('name')
                ->label('Dibuat')
                ->sortable(),
            TextColumn::make('start_time')
                ->label('Mulai')
                ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('d-m-y H:i')),
            TextColumn::make('jumlah_peserta')
                ->label('Peserta')
                // ->counts('absensi')
                ->getStateUsing(fn ($record) => Absensi::where('sesi_absensi_id', $record->id)->count() .' orang')
                ->sortable()
                ->searchable(),
            TextColumn::make('end_time')
                ->label('Aktif')
                ->formatStateUsing(function ($state, $record) {
                    $now = Carbon::now('Asia/Singapore');
                    $endTime = Carbon::parse($state)->setTimezone('Asia/Singapore');
                    if ($now->greaterThanOrEqualTo($endTime)) {
                        return 'Sesi Berakhir';
                    }

                    return $endTime->diffForHumans($now, true);
                })
                ->color(fn ($state, $record) => Carbon::now('Asia/Singapore')->lessThan(Carbon::parse($record->end_time)) ? 'success' : null),
        ])
        ->defaultSort('start_time', 'desc')
        ->actions([
            ActionGroup::make([
                ViewAction::make()->url(fn (SesiAbsensi $record) => route('filament.admin.resources.sesi-absensis.view', $record)),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->label('Aksi') // Bisa disesuaikan
            ->icon('heroicon-m-ellipsis-vertical')
            ->size(ActionSize::Small)
            ->color('info')
            ->button()
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSesiAbsensis::route('/'),
            'create' => Pages\CreateSesiAbsensi::route('/create'),
            'edit' => Pages\EditSesiAbsensi::route('/{record}/edit'),
            'view' => Pages\ViewSesiAbsensi::route('/{record}/view'),
        ];
    }

}
