<?php

namespace App\Filament\Resources\TowerlampResource\Pages;

use App\Filament\Exports\TowerlampExporter;
use App\Filament\Resources\TowerlampResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTowerlamps extends ListRecords
{
    protected static string $resource = TowerlampResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export Excel')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(TowerlampExporter::class)
                ->fileName(fn () => 'lv-data-' . now()->format('Y-m-d-His'))
                ->columnMapping(false)
                ->formats([
                    \Filament\Actions\Exports\Enums\ExportFormat::Xlsx,
                ])
                ->modifyQueryUsing(fn ($query) => $query)
                ->maxRows(10000)
                ->chunkSize(500)
                ->requiresConfirmation(false)
                ->modalHeading('Export Data LV')
                ->modalDescription('Klik tombol di bawah untuk melanjutkan export data dalam format Excel')
                ->modalSubmitAction(fn ($action) => $action->label('Export'))
                ->modalCancelAction(fn ($action) => $action->label('Batal'))
                ->successNotificationTitle('Export Berhasil!'),
            Actions\CreateAction::make(),
        ];
    }
}
