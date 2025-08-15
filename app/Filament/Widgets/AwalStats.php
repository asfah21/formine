<?php

namespace App\Filament\Widgets;

use App\Models\Adt;
use App\Models\Compactor;
use App\Models\Dozer;
use App\Models\Dumptruck;
use App\Models\Exca;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

use App\Models\Grader;
use App\Models\Lv;
use App\Models\Manhaul;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AwalStats extends BaseWidget
{
    protected function getStats(): array
    {
        $total = Adt::count() +
                Compactor::count() +
                Dozer::count() +
                Dumptruck::count() +
                Exca::count() +
                Grader::count() +
                Lv::count() +
                Manhaul::count();

        $approve = Adt::where('approve', '1')->count() +
                Compactor::where('approve', '1')->count() +
                Dozer::where('approve', '1')->count() +
                Dumptruck::where('approve', '1')->count() +
                Exca::where('approve', '1')->count() +
                Grader::where('approve', '1')->count() +
                Lv::where('approve', '1')->count() +
                Manhaul::where('approve', '1')->count();

        $pending = Adt::where('approve', '0')->orWhereNull('approve')->count() +
                Compactor::where('approve', '0')->orWhereNull('approve')->count() +
                Dozer::where('approve', '0')->orWhereNull('approve')->count() +
                Dumptruck::where('approve', '0')->orWhereNull('approve')->count() +
                Exca::where('approve', '0')->orWhereNull('approve')->count() +
                Grader::where('approve', '0')->orWhereNull('approve')->count() +
                Lv::where('approve', '0')->orWhereNull('approve')->count() +
                Manhaul::where('approve', '0')->orWhereNull('approve')->count();

        // Menampilkan data di dashboard
        return [
            Stat::make('Total', $total)
                ->description('Jumlah Keseluruhan Form')
                ->descriptionIcon('heroicon-m-circle-stack')
                ->chart([7, 7, 7, 7, 7, 7, 7])
                ->color('info'),
            Stat::make('Approved', $approve)
                ->description('Form Telah Disetujui')
                ->descriptionIcon('heroicon-m-check-badge')
                ->chart([7, 7, 7, 7, 7, 7, 7])
                ->color('success'),
            Stat::make('Pending', $pending)
                ->description('Form Menunggu Persetujuan')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->chart([10, 10, 10, 10, 10, 10, 10])
                ->color('warning'),
            // Stat::make('New sign-ups', '150')
            //     ->description('Form Menunggu Persetujuan')
            //     ->descriptionIcon('heroicon-m-exclamation-circle')
            //     ->chart([10, 10, 10, 10, 10, 10, 10])
            //     ->color('warning'),
        ];

    }

    // protected function getColumnCount(): int
    // {
    //     return 4; // Set to 4 columns
    // }
}


