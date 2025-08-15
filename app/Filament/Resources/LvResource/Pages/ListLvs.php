<?php

namespace App\Filament\Resources\LvResource\Pages;

use App\Filament\Resources\CustomerResource\Widgets\StatLV;
use App\Filament\Resources\LvResource;
use App\Filament\Widgets\LVStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLvs extends ListRecords
{
    protected static string $resource = LvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatLV::class
        ];
    }
}
