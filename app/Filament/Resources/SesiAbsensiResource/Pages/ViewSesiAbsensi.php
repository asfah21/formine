<?php

// namespace App\Filament\Resources\SesiAbsensiResource\Pages;

// use App\Filament\Resources\SesiAbsensiResource;
// use Filament\Resources\Pages\Page;
// use App\Models\SesiAbsensi;
// use App\Models\Absensi;

// class ViewSesiAbsensi extends Page
// {
//     protected static string $resource = SesiAbsensiResource::class;

//     protected static string $view = 'filament.pages.view-sesi-absensi';

//     public $record;

//     public function mount($record)
//     {
//         $this->record = SesiAbsensi::findOrFail($record);
//     }

//     public function getAbsensis()
//     {
//         return Absensi::where('sesi_absensi_id', $this->record->id)->get();
//     }
// }


namespace App\Filament\Resources\SesiAbsensiResource\Pages;

use App\Filament\Resources\SesiAbsensiResource;
use Filament\Resources\Pages\Page;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Tables\Actions\DeleteAction;
use App\Models\SesiAbsensi;
use App\Models\Absensi;

class ViewSesiAbsensi extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $resource = SesiAbsensiResource::class;
    protected static string $view = 'filament.pages.view-sesi-absensi';

    public $record;

    public function mount($record)
    {
        $this->record = SesiAbsensi::findOrFail($record);
    }

    protected function getTableQuery()
    {
        return Absensi::where('sesi_absensi_id', $this->record->id);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('Nama')->sortable(),
            TextColumn::make('created_at')->dateTime('d-m-y H:i')->label('Waktu'),
            TextColumn::make('jabatan')->label('Jabatan')->sortable(),
            TextColumn::make('jam_tidur')->label('Jam Tidur')->sortable()->formatStateUsing(fn ($state) => $state . ' jam'),
            TextColumn::make('sehat')->label('Sehat')->sortable(),
            ImageColumn::make('photo')
                ->label('Foto Selfie')
                ->getStateUsing(fn ($record) => asset('storage/selfies/' . $record->photo))
                ->width(100)
                ->height(100),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            DeleteAction::make()->label('Tolak')
                ->requiresConfirmation()
                ->successNotificationTitle('Kehadiran user telah dihapus'),
        ];
    }
}

