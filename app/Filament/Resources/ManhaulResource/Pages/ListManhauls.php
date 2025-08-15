<?php

namespace App\Filament\Resources\ManhaulResource\Pages;

use App\Filament\Resources\CustomerResource\Widgets\CustomerOverview;
use App\Filament\Resources\CustomerResource\Widgets\StatLV;
use App\Filament\Resources\CustomerResource\Widgets\StatMH;
use App\Filament\Resources\ManhaulResource;
use App\Filament\Widgets\MHStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManhauls extends ListRecords
{
    protected static string $resource = ManhaulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return[
            StatMH::class
        ];
    }
}
