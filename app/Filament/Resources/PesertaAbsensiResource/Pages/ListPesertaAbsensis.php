<?php

namespace App\Filament\Resources\PesertaAbsensiResource\Pages;

use App\Filament\Resources\PesertaAbsensiResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListPesertaAbsensis extends ListRecords
{
    protected static string $resource = PesertaAbsensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    //Tambahkan tab
    // public function getTabs(): array
    // {
    //     return [
    //         'Semua' => Tab::make(),
    //         'P5M' => Tab::make()->modifyQueryUsing(fn($query) =>
    //             $query->join('sesi_absensis', 'absensis.sesi_absensi_id', '=', 'sesi_absensis.id')
    //                 ->where('sesi_absensis.agenda', 'P5M')
    //         ),
    //         'Rapat' => Tab::make()->modifyQueryUsing(fn($query) =>
    //             $query->join('sesi_absensis', 'absensis.sesi_absensi_id', '=', 'sesi_absensis.id')
    //                 ->where('sesi_absensis.agenda', 'Rapat')
    //         ),
    //     ];
    // }

}
