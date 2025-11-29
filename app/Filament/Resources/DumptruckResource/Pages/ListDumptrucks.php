<?php

namespace App\Filament\Resources\DumptruckResource\Pages;

use App\Filament\Exports\DumptruckExporter;
use App\Filament\Imports\LaptopImporter;
use App\Filament\Resources\CustomerResource\Widgets\StatDT;
use App\Filament\Resources\DumptruckResource;
use App\Filament\Widgets\DTStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListDumptrucks extends ListRecords
{
    protected static string $resource = DumptruckResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(DumptruckExporter::class)
                ->fileName(fn () => 'DT-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data DT')
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
            StatDT::class
        ];
    }
}
