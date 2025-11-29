<?php

namespace App\Filament\Resources\CompactorResource\Pages;

use App\Filament\Exports\CompactorExporter;
use App\Filament\Resources\CompactorResource;
use App\Filament\Resources\CustomerResource\Widgets\StatCP;
use App\Filament\Widgets\CPStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompactors extends ListRecords
{
    protected static string $resource = CompactorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(CompactorExporter::class)
                ->fileName(fn () => 'COMPACTOR-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data Compactor')
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
            StatCP::class
        ];
    }
}
