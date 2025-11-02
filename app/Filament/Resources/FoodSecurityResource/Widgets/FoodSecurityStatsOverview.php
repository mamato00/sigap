<?php

namespace App\Filament\Widgets;

use App\Models\RankingPcaGt;
use App\Models\InflasiSumbar;
use App\Models\FoodSecurity;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FoodSecurityStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Ambil daftar kabupaten/kota yang dianggap tidak aman pangan berdasarkan SFSI
        $insecureKabkots = RankingPcaGt::where('sfsi', '<', -0.495)->pluck('kabkot');

        return [
            Stat::make('SFSI', number_format(RankingPcaGt::avg('sfsi'), 4))
                ->description('Provincial Average SFSI')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('success'),

            Stat::make('Food Insecure Village', FoodSecurity::whereIn('kabkot', $insecureKabkots)->count())
                ->description('Desa Ketahanan Pangan Rendah')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('warning'),

            Stat::make('Next Month Inflation Forecast', number_format(InflasiSumbar::orderBy('tahun', 'desc')
                ->orderBy('bulan', 'desc')
                ->value('provinsi'), 2))
                ->description(description: 'Peramalan Inflasi Bulan Depan di Sumatera Barat')
                ->descriptionIcon('heroicon-m-light-bulb')
                ->color('info'),
        ];
    }
}
