<?php

namespace App\Filament\Resources\InflasiSumbarResource\Pages;

use App\Filament\Resources\InflasiSumbarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInflasiSumbar extends EditRecord
{
    protected static string $resource = InflasiSumbarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
