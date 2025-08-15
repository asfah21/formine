<?php

namespace App\Filament\Resources\GraderResource\Pages;

use App\Filament\Resources\CustomerResource\Widgets\StatGrader;
use App\Filament\Resources\GraderResource;
use App\Filament\Widgets\GraderStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraders extends ListRecords
{
    protected static string $resource = GraderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatGrader::class
        ];
    }
}
