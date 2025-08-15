<?php

namespace App\Filament\Resources\GraderResource\Pages;

use App\Filament\Resources\GraderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrader extends EditRecord
{
    protected static string $resource = GraderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
