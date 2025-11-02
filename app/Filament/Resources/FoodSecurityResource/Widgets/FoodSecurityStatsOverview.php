<?php

namespace App\Filament\Widgets;

use App\Models\FoodSecurity;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FoodSecurityStatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Rata-rata BUI', number_format(FoodSecurity::avg('BUI'), 4))
                ->description('Built-up Index')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('danger'),

            Stat::make('Rata-rata NDBI', number_format(FoodSecurity::avg('NDBI'), 4))
                ->description('Normalized Difference Built-up Index')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('warning'),

            Stat::make('Rata-rata NTL', number_format(FoodSecurity::avg('NTL'), 4))
                ->description('Night-Time Lights')
                ->descriptionIcon('heroicon-m-light-bulb')
                ->color('warning'),

            Stat::make('Rata-rata RWI', number_format(FoodSecurity::avg('RWI'), 4))
                ->description('Relative Water Index')
                ->descriptionIcon('heroicon-m-beaker')
                ->color('info'),

            Stat::make('Total Luas Hutan', number_format(FoodSecurity::sum('Hutan'), 2) . ' m²')
                ->description('Total luas hutan')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('success'),

            Stat::make('Total Luas Sawah', number_format(FoodSecurity::sum('Sawah'), 2) . ' m²')
                ->description('Total luas sawah')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('success'),

            Stat::make('Rata-rata EVI', number_format(FoodSecurity::avg('EVI'), 4))
                ->description('Enhanced Vegetation Index')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('success'),

            Stat::make('Rata-rata LST', number_format(FoodSecurity::avg('LST'), 2))
                ->description('Land Surface Temperature')
                ->descriptionIcon('heroicon-m-sun')
                ->color('danger'),

            Stat::make('Rata-rata NDMI', number_format(FoodSecurity::avg('NDMI'), 4))
                ->description('Normalized Difference Moisture Index')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('info'),

            Stat::make('Rata-rata NDVI', number_format(FoodSecurity::avg('NDVI'), 4))
                ->description('Normalized Difference Vegetation Index')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('success'),

            Stat::make('Rata-rata SAVI', number_format(FoodSecurity::avg('SAVI'), 4))
                ->description('Soil Adjusted Vegetation Index')
                ->descriptionIcon('heroicon-m-rectangle-group')
                ->color('success'),
        ];
    }
}
