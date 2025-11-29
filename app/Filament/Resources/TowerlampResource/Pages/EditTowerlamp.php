<?php

namespace App\Filament\Resources\TowerlampResource\Pages;

use App\Filament\Resources\TowerlampResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTowerlamp extends EditRecord
{
    protected static string $resource = TowerlampResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
