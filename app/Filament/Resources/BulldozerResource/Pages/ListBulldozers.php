<?php

namespace App\Filament\Resources\BulldozerResource\Pages;

use App\Filament\Exports\DozerExporter;
use App\Filament\Resources\BulldozerResource;
use App\Filament\Resources\CustomerResource\Widgets\StatBD;
use App\Filament\Widgets\BDStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulldozers extends ListRecords
{
    protected static string $resource = BulldozerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(DozerExporter::class)
                ->fileName(fn () => 'BULLDOZER-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data Bulldozer')
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
            StatBD::class
        ];
    }
}
