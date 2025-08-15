<?php

namespace App\Filament\Exports;

use App\Models\Laptop;
use Filament\Actions\Exports\Enums\ExportFormat;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;

class DeviceExporter extends Exporter
{
    protected static ?string $model = Laptop::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('asset_id')
                ->label('Asset_ID'),
            ExportColumn::make('device_type'),
            ExportColumn::make('user_id'),
            ExportColumn::make('brand'),
            ExportColumn::make('model'),
            ExportColumn::make('spesifikasi'),
            ExportColumn::make('ram'),
            ExportColumn::make('os'),
            ExportColumn::make('serial_number'),
            ExportColumn::make('arrival_date'),
            ExportColumn::make('kondisi'),
            ExportColumn::make('lokasi'),
            ExportColumn::make('status'),
            ExportColumn::make('remark'),
        ];
    }

    // public function getFormats(): array
    // {
    //     return [
    //         ExportFormat::Xlsx,
    //     ];
    // }

    // public function getXlsxHeaderCellStyle(): ?Style
    // {
    //     return (new Style())
    //         ->setFontBold()
    //         ->setFontSize(12)
    //         ->setFontName('Consolas')
    //         ->setFontColor(Color::rgb(255, 255, 77))
    //         ->setBackgroundColor(Color::rgb(0, 0, 0))
    //         ->setCellAlignment(CellAlignment::CENTER)
    //         ->setCellVerticalAlignment(CellVerticalAlignment::CENTER);
    // }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your device export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }


}
