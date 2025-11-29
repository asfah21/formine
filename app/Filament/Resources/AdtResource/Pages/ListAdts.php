<?php

namespace App\Filament\Resources\AdtResource\Pages;

use App\Filament\Exports\ADTExporter;
use App\Filament\Resources\AdtResource;
use App\Filament\Resources\CustomerResource\Widgets\StatADT;
use App\Filament\Widgets\ADTStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdts extends ListRecords
{
    protected static string $resource = AdtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(ADTExporter::class)
                ->fileName(fn () => 'ADT-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data ADT')
                ->modalDescription('Klik tombol di bawah untuk melanjutkan export data dalam format Excel')
                ->modalSubmitAction(fn ($action) => $action->label('Export'))
                ->modalCancelAction(fn ($action) => $action->label('Batal'))
                ->successNotificationTitle('Export Berhasil!'),
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return[
            StatADT::class
        ];
    }
}
