<?php

namespace App\Filament\Resources\PesertaAbsensiResource\Pages;

use App\Filament\Resources\PesertaAbsensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesertaAbsensi extends EditRecord
{
    protected static string $resource = PesertaAbsensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
