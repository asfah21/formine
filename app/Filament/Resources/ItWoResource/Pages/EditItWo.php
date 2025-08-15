<?php

namespace App\Filament\Resources\ItWoResource\Pages;

use App\Filament\Resources\ItWoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditItWo extends EditRecord
{
    protected static string $resource = ItWoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
