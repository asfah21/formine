<?php

namespace App\Filament\Resources\DumptruckResource\Pages;

use App\Filament\Imports\LaptopImporter;
use App\Filament\Resources\CustomerResource\Widgets\StatDT;
use App\Filament\Resources\DumptruckResource;
use App\Filament\Widgets\DTStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListDumptrucks extends ListRecords
{
    protected static string $resource = DumptruckResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatDT::class
        ];
    }
}
