<?php

namespace App\Filament\Resources\RankingPcaGtResource\Pages;

use App\Filament\Resources\RankingPcaGtResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRankingPcaGt extends EditRecord
{
    protected static string $resource = RankingPcaGtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
