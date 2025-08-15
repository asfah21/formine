<?php

namespace App\Filament\Resources\ExcavatorResource\Pages;

use App\Filament\Resources\CustomerResource\Widgets\StatExca;
use App\Filament\Resources\ExcavatorResource;
use App\Filament\Widgets\Exca;
use App\Filament\Widgets\StatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExcavators extends ListRecords
{
    protected static string $resource = ExcavatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatExca::class
        ];
    }

}
