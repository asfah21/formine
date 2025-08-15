<?php

namespace App\Filament\Resources\AdtResource\Pages;

use App\Filament\Resources\AdtResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdt extends EditRecord
{
    protected static string $resource = AdtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
