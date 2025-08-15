<?php

namespace App\Filament\Resources\SesiAbsensiResource\Pages;

use App\Filament\Resources\SesiAbsensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSesiAbsensi extends EditRecord
{
    protected static string $resource = SesiAbsensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
