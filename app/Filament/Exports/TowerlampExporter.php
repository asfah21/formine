<?php

namespace App\Filament\Exports;

use App\Models\Towerlamp;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class TowerlampExporter extends Exporter
{
    protected static ?string $model = Towerlamp::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('tl_id')->label('TL ID'),
            ExportColumn::make('nama_driver')->label('Nama Driver'),
            ExportColumn::make('departemen')->label('Departemen'),
            // ExportColumn::make('pengawas')->label('Pengawas'),
            ExportColumn::make('date')->label('Tanggal'),
            ExportColumn::make('time')->label('Waktu'),
            ExportColumn::make('no_unit')->label('No Unit'),
            // ExportColumn::make('hm_next_service')->label('HM Next Service'),
            ExportColumn::make('start_hm')->label('Start HM'),
            // ExportColumn::make('finish_hm')->label('Finish HM'),
            ExportColumn::make('shift')->label('Shift'),
            ExportColumn::make('approve')
                ->label('Approve')
                ->formatStateUsing(function ($state) {
                    return ($state !== null && $state !== "0")
                        ? 'Approved'
                        : 'Waiting Approval';
                }),
            // ExportColumn::make('status')->label('Status'),
            ExportColumn::make('pesan')->label('Pesan'),
            ExportColumn::make('jack_tl')->label('Jack Tower Lamp'),
            ExportColumn::make('baut_cover')->label('Baut Cover'),
            ExportColumn::make('kelengkapan_tl')->label('Kelengkapan Tower Lamp'),
            ExportColumn::make('sebelum_mesin_hidup')->label('Sebelum Mesin Hidup'),
            ExportColumn::make('jumlah_solar')->label('Jumlah Solar'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('kebocoran_oli_mesin')->label('Kebocoran Oli Mesin'),
            ExportColumn::make('level_air_battery')->label('Level Air Battery'),
            ExportColumn::make('level_air_radiator')->label('Level Air Radiator'),
            ExportColumn::make('kebocoran_solar')->label('Kebocoran Solar'),
            ExportColumn::make('kabel_wiring_kendor')->label('Kabel Wiring Kendor'),
            ExportColumn::make('instalasi_kabel_power')->label('Instalasi Kabel Power'),
            ExportColumn::make('setelah_mesin_hidup')->label('Setelah Mesin Hidup'),
            ExportColumn::make('panaskan_mesin')->label('Panaskan Mesin'),
            ExportColumn::make('meteran_normal')->label('Meteran Normal'),
            ExportColumn::make('selector_on')->label('Selector On'),
            ExportColumn::make('suara_getaran_normal')->label('Suara Getaran Normal'),
            ExportColumn::make('kondisi_switch')->label('Kondisi Switch'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data Tower Lamp selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' baris gagal diekspor.';
        }

        return $body;
    }

    // STYLE HEADER
    public function getXlsxHeaderCellStyle(): ?Style
    {
        return (new Style())
            ->setFontBold()
            ->setFontSize(12)
            ->setFontColor(Color::BLACK)
            ->setBackgroundColor(Color::rgb(122, 122, 122))
            ->setCellAlignment(CellAlignment::CENTER)
            ->setCellVerticalAlignment(CellVerticalAlignment::CENTER)
            ->setBorder(
                new Border(
                    new BorderPart(Border::BOTTOM, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::LEFT, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::RIGHT, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::TOP, Color::BLACK, Border::WIDTH_THIN)
                )
            );
    }

    // STYLE DATA ROW
    public function getXlsxCellStyle(): ?Style
    {
        return (new Style())
            ->setFontSize(11)
            ->setCellAlignment(CellAlignment::LEFT)
            ->setCellVerticalAlignment(CellVerticalAlignment::CENTER)
            ->setBorder(
                new Border(
                    new BorderPart(Border::BOTTOM, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::LEFT, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::RIGHT, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::TOP, Color::rgb(200, 200, 200), Border::WIDTH_THIN)
                )
            );
    }
}
