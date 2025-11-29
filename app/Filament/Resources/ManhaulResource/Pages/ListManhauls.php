<?php

namespace App\Filament\Resources\ManhaulResource\Pages;

use App\Filament\Exports\ManhaulsExporter;
use App\Filament\Resources\CustomerResource\Widgets\CustomerOverview;
use App\Filament\Resources\CustomerResource\Widgets\StatLV;
use App\Filament\Resources\CustomerResource\Widgets\StatMH;
use App\Filament\Resources\ManhaulResource;
use App\Filament\Widgets\MHStat;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListManhauls extends ListRecords
{
    protected static string $resource = ManhaulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(ManhaulsExporter::class)
                ->fileName(fn () => 'MANHAUL-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data Manhaul')
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
            StatMH::class
        ];
    }
}
