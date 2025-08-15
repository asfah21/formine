<?php

namespace App\Filament\Resources\BulldozerResource\Pages;

use App\Filament\Resources\BulldozerResource;
use App\Filament\Resources\CustomerResource\Widgets\StatBD;
use App\Filament\Widgets\BDStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulldozers extends ListRecords
{
    protected static string $resource = BulldozerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatBD::class
        ];
    }
}
