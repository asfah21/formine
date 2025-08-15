<?php

namespace App\Filament\Resources\LvResource\Pages;

use App\Filament\Resources\LvResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLv extends EditRecord
{
    protected static string $resource = LvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
