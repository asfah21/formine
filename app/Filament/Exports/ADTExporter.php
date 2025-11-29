<?php

namespace App\Filament\Exports;

use App\Models\Adt;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class ADTExporter extends Exporter
{
    protected static ?string $model = Adt::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('adt_id')->label('ADT ID'),
            ExportColumn::make('nama_driver')->label('Nama Driver'),
            ExportColumn::make('departemen')->label('Departemen'),
            ExportColumn::make('pengawas')->label('Pengawas'),
            ExportColumn::make('date')->label('Tanggal'),
            ExportColumn::make('time')->label('Waktu'),
            ExportColumn::make('NomorUnit')->label('Nomor Unit'),
            // ExportColumn::make('HMNextService')->label('HM Next Service'),
            ExportColumn::make('StartHM')->label('Start HM'),
            // ExportColumn::make('FinishHM')->label('Finish HM'),
            ExportColumn::make('Shift')->label('Shift'),
            ExportColumn::make('approve')
                ->label('Approve')
                ->formatStateUsing(function ($state) {
                    return ($state !== null && $state !== "0")
                        ? 'Approved'
                        : 'Waiting Approval';
                }),
            // ExportColumn::make('status')->label('Status'),
            ExportColumn::make('pesan')->label('Pesan'),
            ExportColumn::make('PassFuel')->label('Pass Fuel'),
            ExportColumn::make('Tyre')->label('Tyre'),
            ExportColumn::make('FinelDrive')->label('Final Drive'),
            ExportColumn::make('SelinderSteering')->label('Selinder Steering'),
            ExportColumn::make('DriveShaft')->label('Drive Shaft'),
            ExportColumn::make('DropBox')->label('Drop Box'),
            ExportColumn::make('Pivot')->label('Hitch/Pivot'),
            ExportColumn::make('CFrame')->label('C-Frame'),
            ExportColumn::make('LevelOliHidraulic')->label('Level Oli Hidrolik'),
            ExportColumn::make('LevelOliTransmisi')->label('Level Oli Transmisi'),
            ExportColumn::make('BatteryAki')->label('Battery Aki'),
            ExportColumn::make('SelinderDump')->label('Selinder Dump'),
            ExportColumn::make('DumpBody')->label('Dump Body / Vessel'),
            ExportColumn::make('RubberSpring')->label('Rubber Spring'),
            ExportColumn::make('PropellarShaft')->label('Propellar Shaft'),
            ExportColumn::make('AxelFront')->label('Axel Front, Middle, Rear'),
            ExportColumn::make('AFrame')->label('A-Frame'),
            ExportColumn::make('LevelOliBrake')->label('Level Oli Brake'),
            ExportColumn::make('Muffler')->label('Muffler/Knalpot'),
            ExportColumn::make('LevelOliEngine')->label('Level Oli Engine'),
            ExportColumn::make('LevelAirCoolant')->label('Level Air Coolant'),
            ExportColumn::make('VBelt')->label('V Belt'),
            ExportColumn::make('AirCleaner')->label('Air Cleaner'),
            ExportColumn::make('WaterSeparator')->label('Water Separator'),
            ExportColumn::make('Apar')->label('APAR'),
            ExportColumn::make('FireSup')->label('Fire Suppression'),
            ExportColumn::make('TaliPengaws')->label('Tali Pengaman'),
            ExportColumn::make('Radio')->label('Radio'),
            ExportColumn::make('SafetyCone')->label('Safety Cone'),
            ExportColumn::make('KebersihanEquip')->label('Kebersihan Equipment'),
            ExportColumn::make('LevelOliMesin')->label('Level Oli Mesin'),
            ExportColumn::make('LevelOliTransmisi2')->label('Level Oli Transmisi 2'),
            ExportColumn::make('LevelOliHydraulic')->label('Level Oli Hydraulic'),
            ExportColumn::make('LevelOliRem')->label('Level Oli Rem'),
            ExportColumn::make('LevelFuel')->label('Level Fuel'),
            ExportColumn::make('OliTemp')->label('Oli Temp'),
            ExportColumn::make('TekananRemTractor')->label('Tekanan Rem Tractor'),
            ExportColumn::make('TekananRemTrailer')->label('Tekanan Rem Trailer'),
            ExportColumn::make('Kemudi')->label('Kemudi'),
            ExportColumn::make('PangaturStir')->label('Pengatur Stir'),
            ExportColumn::make('PedalGas')->label('Pedal Gas'),
            ExportColumn::make('PedalRemService')->label('Pedal Rem Service'),
            ExportColumn::make('PedalRetarder')->label('Pedal Retarder'),
            ExportColumn::make('Difflock')->label('Difflock 6x6'),
            ExportColumn::make('TuasTransmisi')->label('Tuas Transmisi'),
            ExportColumn::make('TuasLeverDump')->label('Tuas Lever Dump'),
            ExportColumn::make('RemParkir')->label('Rem Parkir'),
            ExportColumn::make('LDB')->label('LDB'),
            ExportColumn::make('ATC')->label('ATC'),
            ExportColumn::make('LockTransmisi')->label('Lock Transmisi'),
            ExportColumn::make('EngineBrake')->label('Engine Brake'),
            ExportColumn::make('SeatBelt')->label('Seat Belt'),
            ExportColumn::make('LeverSingnal')->label('Lever Signal/Reting'),
            ExportColumn::make('Klakson')->label('Klakson'),
            ExportColumn::make('KebocoranOli')->label('Kebocoran Oli'),
            ExportColumn::make('KebocoranAir')->label('Kebocoran Air'),
            ExportColumn::make('KebocoranUdara')->label('Kebocoran Udara'),
            ExportColumn::make('KebocoranFuel')->label('Kebocoran Fuel'),
            ExportColumn::make('SuaraMasuk')->label('Suara Mesin'),
            ExportColumn::make('SuaraTransmisi')->label('Suara Transmisi'),
            ExportColumn::make('SuaraDifferential')->label('Suara Differential'),
            ExportColumn::make('StirKemudi')->label('Stir Kemudi'),
            ExportColumn::make('Retarder')->label('Retarder'),
            ExportColumn::make('RemKaki')->label('Rem Kaki'),
            ExportColumn::make('RemParkir2')->label('Rem Parkir 2'),
            ExportColumn::make('GigiPerseneling')->label('Gigi Perseneling'),
            ExportColumn::make('KlaksonMundur')->label('Klakson Mundur'),
            ExportColumn::make('LampuPeringatan')->label('Lampu Peringatan'),
            ExportColumn::make('Ecu')->label('ECU'),
            ExportColumn::make('SystemHidraulik')->label('System Hidrolik'),
            ExportColumn::make('Gauge')->label('Gauge'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data ADT selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setBackgroundColor(Color::rgb(9, 114, 23))
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
