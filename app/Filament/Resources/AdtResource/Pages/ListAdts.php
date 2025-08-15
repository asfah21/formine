<?php

namespace App\Filament\Resources\AdtResource\Pages;

use App\Filament\Resources\AdtResource;
use App\Filament\Resources\CustomerResource\Widgets\StatADT;
use App\Filament\Widgets\ADTStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdts extends ListRecords
{
    protected static string $resource = AdtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return[
            StatADT::class
        ];
    }
}
