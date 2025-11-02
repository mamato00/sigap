<?php

namespace App\Filament\Resources\FoodSecurityResource\Pages;

use App\Filament\Resources\FoodSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoodSecurity extends EditRecord
{
    protected static string $resource = FoodSecurityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
