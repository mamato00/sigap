<?php

namespace App\Filament\Resources\FoodSecurityResource\Pages;

use App\Filament\Resources\FoodSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFoodSecurity extends ViewRecord
{
    protected static string $resource = FoodSecurityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
