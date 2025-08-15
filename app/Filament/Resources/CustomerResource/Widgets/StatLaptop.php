<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use App\Models\Laptop;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\HtmlString;

class StatLaptop extends BaseWidget
{
    protected function getStats(): array
    {
        $total = Laptop::count();
        $laptop = Laptop::where('device_type', 'Laptop')->count();
        $other =    Laptop::where('device_type', '!=', 'Laptop')->count();

        $laptop_ready = Laptop::where('device_type', 'Laptop')->where('status', 'Ready')->count();
        $stb_laptop = Laptop::where(function ($query) {
            $query->where('status', 'Standby')
                  ->orWhereNull('status');
        })->count();

        // Menampilkan data di dashboard
        return [
            Stat::make('Total Device', $total)
                ->description('Jumlah Asset IT')
                ->descriptionIcon('heroicon-m-circle-stack')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('info'),
            Stat::make(new HtmlString('<span style="font-size: 2em; font-weight: bold;">' . $other . '</span> Aset Lainnya'), '')
                ->description(new HtmlString('<span style="font-size: 2em; font-weight: bold;">' . $laptop . '</span> Laptop '))
                ->chart([10, 2, 8, 2, 8, 2, 10])
                ->color('warning'),
            Stat::make('Ready', $laptop_ready)
                ->description('Laptop Ready')
                ->descriptionIcon('heroicon-m-check-badge')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Standby', $stb_laptop)
                ->description('Laptop Standby')
                ->descriptionIcon('heroicon-m-check-badge')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),

        ];
    }
}
