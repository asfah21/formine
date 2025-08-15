<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use App\Models\Adt;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatADT extends BaseWidget
{
    protected function getStats(): array
    {
        $total = Adt::count();
        $approve = Adt::where('approve', '1')->count();
        $pending = Adt::where(function ($query) {
            $query->where('approve', '0')
                  ->orWhereNull('approve');
        })->count();

        // Menampilkan data di dashboard
        return [
            Stat::make('Pending', $pending)
                ->description('Menunggu Persetujuan')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('warning'),
            Stat::make('Approved', $approve)
                ->description('Telah Disetujui')
                ->descriptionIcon('heroicon-m-check-badge')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Total', $total)
            ->description('Jumlah Total P2H')
            ->descriptionIcon('heroicon-m-circle-stack')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('info'),
        ];
    }
}
