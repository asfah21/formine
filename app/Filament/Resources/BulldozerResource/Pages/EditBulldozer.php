<?php

namespace App\Filament\Resources\BulldozerResource\Pages;

use App\Filament\Resources\BulldozerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBulldozer extends EditRecord
{
    protected static string $resource = BulldozerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
