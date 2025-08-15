<?php

namespace App\Filament\Resources\LaptopResource\Pages;

use App\Filament\Exports\DeviceExporter;
use App\Filament\Imports\DeviceImporter;
use App\Filament\Resources\LaptopResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Imports\LaptopImporter;
use App\Filament\Resources\CustomerResource\Widgets\StatLaptop;
use Filament\Actions\Exports\Enums\ExportFormat;
use Illuminate\Contracts\View\View;
use PhpParser\Node\Stmt\Label;
use Filament\Actions\ExportAction;
use App\Filament\Exports\ProductExporter;
use Filament\Tables\Table;

class ListLaptops extends ListRecords
{
    protected static string $resource = LaptopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->label('Export')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->exporter(DeviceExporter::class)
                ->maxRows(1000),
            Actions\ImportAction::make()
                ->label('Import')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('info')
                ->importer(DeviceImporter::class),
            Actions\CreateAction::make()
                ->label('New Asset')
                ->icon('heroicon-o-plus-circle'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return[
            StatLaptop::class
        ];
    }

    // public function getHeader(): ?View
    // {
    //     $datax = Actions\CreateAction::make();
    //     return view('filament.custom.upload-file', compact('datax'));
    // }
}
