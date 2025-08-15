<?php

namespace App\Filament\Resources\CompactorResource\Pages;

use App\Filament\Resources\CompactorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompactor extends EditRecord
{
    protected static string $resource = CompactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
