<?php

namespace App\Filament\Pages;

use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersForm;

    public function filtersForm(Form $form): Form
    {
        return $form->schema([
            \Filament\Forms\Components\Select::make('region')
                ->label('Filter Wilayah')
                ->options([
                    'Kota Padang' => 'Kota Padang',
                    'Kota Bukittinggi' => 'Kota Bukittinggi',
                    'Kabupaten Dharmasraya' => 'Kab. Dharmasraya',
                    'Kabupaten Pasaman Barat' => 'Kab. Pasaman Barat',
                ])
                ->default('ALL')
                ->live()
        ]);
    }
}
