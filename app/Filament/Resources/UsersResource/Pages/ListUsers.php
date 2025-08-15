<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Filament\Exports\UsersExporter;
use App\Filament\Imports\UsersImporter;
use App\Filament\Resources\UsersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UsersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(UsersExporter::class)
                ->maxRows(1000),
            Actions\ImportAction::make()
                ->label('Import')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('info')
                ->importer(UsersImporter::class),
            Actions\CreateAction::make()
                ->label('New User')
                ->icon('heroicon-o-plus-circle'),
            // Actions\CreateAction::make(),
        ];
    }
}
