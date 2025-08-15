<?php

namespace App\Filament\Resources\CompactorResource\Pages;

use App\Filament\Resources\CompactorResource;
use App\Filament\Resources\CustomerResource\Widgets\StatCP;
use App\Filament\Widgets\CPStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompactors extends ListRecords
{
    protected static string $resource = CompactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return[
            StatCP::class
        ];
    }
}
