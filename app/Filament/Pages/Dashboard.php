<?php

namespace App\Filament\Pages;

use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use App\Filament\Widgets\FoodSecurityStatsOverview; // Widget statistik Anda
use App\Filament\Widgets\ImageGalleryWidget;      // Widget galeri Anda
use App\Filament\Widgets\InflasiLineChartWidget;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersForm;

    public function filtersForm(Form $form): Form
    {
        return $form->schema([
            \Filament\Forms\Components\Select::make('region')
                ->label('Filter Wilayah')
                ->options([
                    'ALL' => 'Semua Wilayah',
                    'Kabupaten Pesisir Selatan' => 'Kab. Pesisir Selatan',
                    'Kabupaten Solok' => 'Kab. Solok',
                    'Kabupaten Sijunjung' => 'Kab. Sijunjung',
                    'Kabupaten Tanah Datar' => 'Kab. Tanah Datar',
                    'Kabupaten Padang Pariaman' => 'Kab. Padang Pariaman',
                    'Kabupaten Agam' => 'Kab. Agam',
                    'Kabupaten Lima Puluh Kota' => 'Kab. Lima Puluh Kota',
                    'Kabupaten Pasaman' => 'Kab. Pasaman',
                    'Kabupaten Kepulauan Mentawai' => 'Kab. Kepulauan Mentawai',
                    'Kabupaten Dharmasraya' => 'Kab. Dharmasraya',
                    'Kabupaten Solok Selatan' => 'Kab. Solok Selatan',
                    'Kabupaten Pasaman Barat' => 'Kab. Pasaman Barat',
                    'Kota Padang' => 'Kota Padang',
                    'Kota Solok' => 'Kota Solok',
                    'Kota Sawahlunto' => 'Kota Sawahlunto',
                    'Kota Padang Panjang' => 'Kota Padang Panjang',
                    'Kota Bukittinggi' => 'Kota Bukittinggi',
                    'Kota Payakumbuh' => 'Kota Payakumbuh',
                    'Kota Pariaman' => 'Kota Pariaman',
                ])
                ->default('ALL')
                ->live()
        ]);
    }
}
