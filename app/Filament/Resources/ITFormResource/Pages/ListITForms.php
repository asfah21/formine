<?php

namespace App\Filament\Resources\ITFormResource\Pages;

use App\Filament\Resources\ITFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListITForms extends ListRecords
{
    protected static string $resource = ITFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
