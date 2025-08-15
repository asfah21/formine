<?php

namespace App\Filament\Resources\ManhaulResource\Pages;

use App\Filament\Resources\ManhaulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditManhaul extends EditRecord
{
    protected static string $resource = ManhaulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
