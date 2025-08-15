<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaptopResource\Pages;
use App\Filament\Resources\LaptopResource\RelationManagers;
use App\Models\Laptop;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Filament\Forms\Components\Radio;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class LaptopResource extends Resource
{
    protected static ?string $model = Laptop::class;

    protected static ?string $navigationGroup = 'IT Management';

    protected static ?string $slug = 'it-asset'; // 'huruf kecil dan tanpa spasi'

    protected static ?string $label = 'IT Asset';

    protected static ?string $navigationLabel = 'IT Asset';

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Membuat grid dengan 4 kolom
            Grid::make()
            ->columns([
                'sm' => 1,
                'xl' => 2,
                '2xl' => 4,
            ])
            ->schema([
                TextInput::make('asset_id')
                    ->label('Asset ID')
                    ->columnSpan(['2xl' => 4, ])
                    ->required(),
                Select::make('device_type')
                    ->label('Jenis Device')
                    ->options([
                        'Laptop' => 'Laptop',
                        'Printer' => 'Printer',
                        'PC Dekstop' => 'PC Dekstop',
                        'Monitor' => 'Monitor',
                        'Router' => 'Router',
                        'Scanner' => 'Scanner',
                        'Paper Shredder' => 'Paper Shredder',
                        'CCTV' => 'CCTV',
                        'Drone' => 'Drone',
                        'Radio Rig' => 'Radio Rig',
                        'Radio HT' => 'Radio HT',
                        'Power Supply' => 'Power Supply',
                        'Tablet' => 'Tablet',

                    ])
                    ->required(),
                Select::make('status')
                    ->label('Status Device')
                    ->options([
                        'Ready' => 'Ready',
                        'Standby' => 'Standby',
                    ])
                    ->required(),
                Select::make('user_id')
                    ->label('User')
                    ->columnSpan(['xl' => 2, ])
                    ->searchable()
                    ->preload()
                    ->options(function (): array {
                        return User::all()->pluck('name', 'id')->all();
                    }),
                TextInput::make('brand')
                    ->label('Merek')
                    ->required(),
                TextInput::make('model')
                    ->label('Model')
                    ->required(),
                TextInput::make('serial_number')
                    ->label('SN')
                    ->required(),
                TextInput::make('mobo')
                    ->label('Mainboard'),
                TextInput::make('spesifikasi')
                    ->label('Spesifikasi'),
                TextInput::make('gpu')
                    ->label('GPU'),
                TextInput::make('ram')
                    ->label('RAM'),
                TextInput::make('os')
                    ->label('OS'),
                DatePicker::make('arrival_date')
                    ->label('Tanggal Datang')
                    ->required(),
                DatePicker::make('tgl_serah_terima')
                    ->label('Serah Terima')
                    ->required(),
                // Radio::make('condition')
                //     ->label('Kondisi')
                //     ->options([
                //         'baik' => 'Baik',
                //         'rusak' => 'Rusak',
                //     ])
                //     ->default(null)
                //     ->nullable(),
                // Radio::make('condition_ku')
                //     ->label('Kondisi')
                //     ->options([
                //         'baik' => 'Baik',
                //         'rusak' => 'Rusak',
                //     ])
                //     ->default(null)
                //     ->nullable(),
                Textarea::make('remark')
                    ->columnSpan(['xl' => 2, ])
                    ->Label('Keterangan'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('asset_id')
                    ->label('ID Asset')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('device_type')
                    ->label('Jenis')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn ($state) => ucwords(str_replace('_', ' ', $state))),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => ucwords(str_replace('_', ' ', $state)))
                    ->badge()
                    ->color(fn($state) => $state === 'Ready' ? 'success' : 'danger'),
                TextColumn::make('user.name')
                    ->label('User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('brand')
                    ->label('Merek')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('spesifikasi')
                    ->searchable()
                    ->label('Spesifikasi'),
                // TextColumn::make('tgl_serah_terima')
                //     ->label('Tanggal Terima')
                //     ->sortable(),
                TextColumn::make('umur')
                    ->label('Umur Perangkat')
                    ->getStateUsing(function ($record) {
                        // Mengambil tanggal serah terima dari record
                        $tglKedatangan = Carbon::parse($record->arrival_date);

                        // Menghitung selisih antara tgl_serah_terima dan sekarang (now)
                        $now = Carbon::now();
                        $diff = $tglKedatangan->diff($now); // Mendapatkan perbedaan dalam format yang lebih lengkap

                        // Menyusun umur dalam format 'X tahun Y bulan Z hari'
                        return $diff->y . ' tahun ' . $diff->m . ' bulan ' . $diff->d . ' hari';
                    })
                    ->color(function ($state) {
                        // Menambahkan logika untuk memberi warna merah jika umur lebih dari 4 tahun
                        $parts = explode(' ', $state); // Memisahkan tahun, bulan, dan hari
                        $years = (int) $parts[0]; // Mengambil tahun

                        if ($years >= 4) {
                            return 'danger'; // Kelas warna merah dari Tailwind (danger)
                        }
                        if($years >= 1) {
                            return 'success';
                        }
                        else {
                            return 'warning'; // Mengembalikan warna hijau (success) jika umur < 4 tahun
                        }

                        return ''; // Tidak ada perubahan warna jika umur kurang dari 4 tahun
                    }),
            ])
            ->filters([
                // SelectFilter::make('umur')
                // ->label('Umur Laptop')
                // ->options([
                //     'under_4_years' => 'Kurang dari 4 tahun',
                //     'over_4_years' => 'Lebih dari 4 tahun',
                // ])
                // ->query(function ($query, $data) {
                //     if ($data === 'over_4_years') {
                //         $query->whereHas('tgl_serah_terima', function ($query) {
                //             $query->whereDate('tgl_serah_terima', '<', Carbon::now()->subYears(4));
                //         });
                //     } elseif ($data === 'under_4_years') {
                //         $query->whereHas('tgl_serah_terima', function ($query) {
                //             $query->whereDate('tgl_serah_terima', '>=', Carbon::now()->subYears(4));
                //         });
                //     }
                // }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            // ])
            // ->headerActions([
            //     Tables\Actions\CreateAction::make(),
            // ])
            // ->emptyStateActions([
            //     Tables\Actions\CreateAction::make(),
            ]);
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
            'index' => Pages\ListLaptops::route('/'),
            'create' => Pages\CreateLaptop::route('/create'),
            'edit' => Pages\EditLaptop::route('/{record}/edit'),
        ];
    }
}
