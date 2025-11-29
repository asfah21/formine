<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TowerlampResource\Pages;
use App\Filament\Resources\TowerlampResource\RelationManagers;
use App\Models\Towerlamp;
use Carbon\Carbon;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TowerlampResource extends Resource
{
    protected static ?string $model = Towerlamp::class;

    protected static ?string $navigationGroup = 'Formulir';

    protected static ?string $slug = 'towerlamp'; // 'huruf kecil dan tanpa spasi'

    protected static ?string $label = 'Tower Lamp';

    protected static ?string $navigationLabel = 'Tower Lamp';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('approve', '0')->count();

        return $count > 0 ? $count : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_driver')
                    ->label('Nama Driver'),
                TextInput::make('no_unit')
                    ->label('Unit'),
                DatePicker::make('date')
                    ->label('Tanggal')
                    ->format('Y-m-d') // Pastikan disimpan dalam format yang benar
                    ->displayFormat('d/m/Y')
                    ->native(false),
                TimePicker::make('time')
                    ->label('Jam'),
                TextInput::make('departemen')
                    ->label('Department'),
                TextInput::make('shift')
                    ->label('Shift'),
                Textarea::make('pesan')
                    ->label('Pesan / Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $columns = array_filter((new Towerlamp())->getFillable(), fn($column) => $column);

        // Query untuk menampilkan semua record Towerlamp, tanpa filter pada approve atau status
        $query = Towerlamp::query()->orderBy('date', 'desc');

        return $table
            ->query($query)
            ->columns([
            TextColumn::make('nama_driver')
                ->label('Nama Driver')
                ->searchable()
                ->sortable(),
            TextColumn::make('date')
                ->label('Tanggal')
                ->searchable()
                ->sortable()
                ->formatStateUsing(fn ($state) => Carbon::parse($state)->format('d-m-Y')),
            TextColumn::make('no_unit')
                ->label('Unit')
                ->searchable()
                ->sortable(),
            TextColumn::make('shift')
                ->searchable()
                ->sortable(),
            TextColumn::make('rusak_stats')
                ->label('Rusak')
                ->getStateUsing(fn($record) => static::generateStatusCount($record, $columns, 'rusak')) // Memanggil generateStatusCount statis
                ->badge()
                ->color(fn($state) => $state ? 'danger' : 'success')
                ->tooltip(fn($record) => static::generateAttributeNames($record, $columns)), // Memanggil generateAttributeNames statis

            // Kolom jumlah "Tidak Ada"
            TextColumn::make('tidak_ada_stats')
                ->label('Tidak Ada')
                ->getStateUsing(fn($record) => static::generateStatusCount($record, $columns, 'tidak ada')) // Memanggil generateStatusCount statis
                ->badge()
                ->color(fn($state) => $state ? 'danger' : 'success')
                ->tooltip(fn($record) => static::generateAttributeTidakAda($record, $columns)),

            TextColumn::make('approval_status') // Dummy attribute
                ->label('Status')
                ->getStateUsing(fn($record) => $record->approve == 1 ? 'Approved' : 'Pending')
                ->badge()
                ->color(fn($state) => $state === 'Approved' ? 'success' : 'warning'),

            TextColumn::make('pengawas')
                ->label('Approved by')
                ->placeholder('Waiting'),

            ToggleColumn::make('approve')
                ->label('Approval')
                ->onColor('success')
                ->offColor('warning')
                // ->toggleable(fn($record, $state) => static::handleApprovalToggle($record, $state))
                ->updateStateUsing(fn($record, $state) => static::handleApprovalsToggle($record, $state))
                ->hidden(auth()->user()->role === 'foreman'),
        ])
        ->filters([
            // Menambahkan filter jika diperlukan
        ])
        ->actions([
            Tables\Actions\EditAction::make()
                ->label('Edit'),
            Action::make('view')
                ->label('Lihat')
                ->icon('heroicon-s-eye')
                ->color('success')
                ->url(fn($record) => route('detailTl.show', [
                    'name' => $record->nama_driver,
                    'aptnumx' => $record->tl_id,
                ])),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    protected static function handleApprovalsToggle($record, $state)
    {
        if (!$record) {
            return; // Jika $record null, keluar dari fungsi
        }

        $record->update(['approve' => $state]);

        if ($state) {
            // Jika toggle aktif, set status dengan email pengguna
            $email = Auth::user()->email;
            $name = Auth::user()->name;
            $record->update([
                'status' => $email . '.png',
                'pengawas' => $name,
            ]);
        } else {
            // Jika toggle tidak aktif, set status ke null
            $record->update([
                'status' => null,
                'pengawas' => null,
            ]);
        }
    }

    // Mengubah generateStatusCount menjadi metode static
    private static function generateStatusCount($record, $columns, $status)
    {
        // Menambahkan nilai default jika tidak ada status yang sesuai
        $count = collect($columns)->filter(fn($column) => strtolower($record->$column) === $status)->count();
        return $count > 0 ? "{$count} " . ucfirst($status) : '0'; // Menampilkan 0 jika tidak ada data
    }

    // Fungsi untuk mencari nama atribut yang mengandung "Rusak" atau "Tidak Ada"
    private static function generateAttributeNames($record, $columns)
    {
        $matchingColumns = collect($columns)->filter(function ($column) use ($record) {
            return in_array(strtolower($record->$column), ['rusak']);
        })->map(function ($column) use ($record) {
            return $column . ' (' . ucfirst(strtolower($record->$column)) . ')';
        });

        return $matchingColumns->isNotEmpty() ? $matchingColumns->implode(', ') : 'Tidak Ada';
    }

    private static function generateAttributeTidakAda($record, $columns)
    {
        $matchingColumns = collect($columns)->filter(function ($column) use ($record) {
            return in_array(strtolower($record->$column), ['tidak ada']);
        })->map(function ($column) use ($record) {
            return $column . ' (' . ucfirst(strtolower($record->$column)) . ')';
        });

        return $matchingColumns->isNotEmpty() ? $matchingColumns->implode(', ') : 'Tidak Ada';
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTowerlamps::route('/'),
            'create' => Pages\CreateTowerlamp::route('/create'),
            'edit' => Pages\EditTowerlamp::route('/{record}/edit'),
        ];
    }
}
