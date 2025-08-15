<?php

namespace App\Filament\Resources\DumptruckResource\Pages;

use App\Filament\Resources\DumptruckResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDumptruck extends EditRecord
{
    protected static string $resource = DumptruckResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
