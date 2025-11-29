<?php

namespace App\Filament\Resources\ExcavatorResource\Pages;

use App\Filament\Exports\ExcaExporter;
use App\Filament\Resources\CustomerResource\Widgets\StatExca;
use App\Filament\Resources\ExcavatorResource;
use App\Filament\Widgets\Exca;
use App\Filament\Widgets\StatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExcavators extends ListRecords
{
    protected static string $resource = ExcavatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(ExcaExporter::class)
                ->fileName(fn () => 'EXCAVATOR-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data EXCAVATOR')
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
            StatExca::class
        ];
    }

}
