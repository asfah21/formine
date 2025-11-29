<?php

namespace App\Filament\Exports;

use App\Models\Lv;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class LvExporter extends Exporter
{
    protected static ?string $model = Lv::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')->label('ID'),
            ExportColumn::make('nama_driver')->label('Nama Driver'),
            ExportColumn::make('date')->label('Tanggal'),
            ExportColumn::make('time')->label('Waktu'),
            ExportColumn::make('departemen')->label('Departemen'),
            ExportColumn::make('pengawas')->label('Pengawas'),
            ExportColumn::make('no_unit')->label('No Unit'),
            ExportColumn::make('shift')->label('Shift'),
            ExportColumn::make('start_hm')->label('Start HM'),
            // ExportColumn::make('status')->label('Status'),
            // ExportColumn::make('approve')->label('Approve'),
            ExportColumn::make('approve')
                ->label('Approve')
                ->formatStateUsing(function ($state) {
                    return $state !== null ? 'Approved' : 'Waiting Approval';
                }),
            ExportColumn::make('pesan')->label('Pesan'),
            ExportColumn::make('LevelOlitrans')->label('Level Oli Transmisi (AA)'),
            ExportColumn::make('AirRadiator')->label('Air Radiator (AA)'),
            ExportColumn::make('LevelOlikemudi')->label('Level Oli Kemudi (AA)'),
            ExportColumn::make('LevelOliengine')->label('Level Oli Engine (AA)'),
            ExportColumn::make('LevelOlirem')->label('Level Oli Rem (AA)'),
            ExportColumn::make('LevelOliperseneling')->label('Level Oli Perseneling (AA)'),
            ExportColumn::make('BodyUnit')->label('Body Unit (AA)'),
            ExportColumn::make('BanBautroda')->label('Ban Baut Roda (AA)'),
            ExportColumn::make('KacaSpion')->label('Kaca Spion (AA)'),
            ExportColumn::make('AlarmMundur')->label('Alarm Mundur (AA)'),
            ExportColumn::make('LampuRem')->label('Lampu Rem (AA)'),
            ExportColumn::make('LampuDepan')->label('Lampu Depan (AA)'),
            ExportColumn::make('LampuRotary')->label('Lampu Rotary (AA)'),
            ExportColumn::make('AirWiper')->label('Air Wiper (A)'),
            ExportColumn::make('TiangBendera')->label('Tiang Bendera (A)'),
            ExportColumn::make('Kemudi')->label('Kemudi (AA)'),
            ExportColumn::make('RemTangan')->label('Rem Tangan (AA)'),
            ExportColumn::make('RemKaki')->label('Rem Kaki (AA)'),
            ExportColumn::make('Klakson')->label('Klakson (AA)'),
            ExportColumn::make('PanelIndikator')->label('Panel Indikator (AA)'),
            ExportColumn::make('Wd')->label('4WD (AA)'),
            ExportColumn::make('Wipers')->label('Wipers (AA)'),
            ExportColumn::make('RadioRig')->label('Radio Rig (AA)'),
            ExportColumn::make('SeatBelt')->label('Seat Belt (AA)'),
            ExportColumn::make('TempatDuduk')->label('Tempat Duduk (A)'),
            ExportColumn::make('Dongkrak')->label('Dongkrak (A)'),
            ExportColumn::make('GanjalRoda')->label('Ganjal Roda (A)'),
            ExportColumn::make('KabinKaca')->label('Kebersihan Kaca (A)'),
            ExportColumn::make('KunciBautroda')->label('Kunci Baut Roda (A)'),
            ExportColumn::make('Apar')->label('APAR (A)'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
            // ExportColumn::make('updated_at')->label('Diupdate Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data LV selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setFontColor(Color::WHITE)
            ->setBackgroundColor(Color::rgb(204, 30, 219))
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
