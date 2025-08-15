<?php

namespace App\Filament\Resources\ItWoResource\Pages;

use App\Filament\Resources\ItWoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItWos extends ListRecords
{
    protected static string $resource = ItWoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
