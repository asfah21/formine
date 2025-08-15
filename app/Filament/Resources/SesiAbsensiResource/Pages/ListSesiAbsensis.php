<?php

namespace App\Filament\Resources\SesiAbsensiResource\Pages;

use App\Filament\Resources\SesiAbsensiResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListSesiAbsensis extends ListRecords
{
    protected static string $resource = SesiAbsensiResource::class;

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
    //         'Peserta' => Tab::make()->modifyQueryUsing(function($query) {
    //             $query->where('published', true);
    //         }),

    //     ];
    // }
}


