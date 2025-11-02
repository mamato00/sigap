<?php

namespace App\Filament\Widgets;

use App\Models\RankingPcaGt;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RankingTableWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = '1';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                RankingPcaGt::query()
                    ->orderBy('rank_pca')
            )
            ->columns([

                Tables\Columns\TextColumn::make('kabkot')
                    ->label('Kabupaten/Kota')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->wrap(),

                Tables\Columns\TextColumn::make('rank_pca')
                    ->label('Rank IKP')
                    ->sortable()
                    ->alignCenter()
                    ->badge()
                    ->color(fn ($record) => match(true) {
                        $record->rank_pca <= 3 => 'success',
                        $record->rank_pca <= 10 => 'info',
                        default => 'gray'
                    }),

                Tables\Columns\TextColumn::make('ikp')
                    ->label('IKP')
                    ->sortable()
                    ->alignCenter()
                    ->numeric(decimalPlaces: 4)
                    ->color('primary'),

                Tables\Columns\TextColumn::make('sfsi')
                    ->label('SFSI (GT)')
                    ->sortable()
                    ->alignCenter()
                    ->numeric(decimalPlaces: 4)
                    ->color('warning'),

                Tables\Columns\TextColumn::make('rank_gt')
                    ->label('Rank GT')
                    ->sortable()
                    ->alignCenter()
                    ->badge()
                    ->color(fn ($record) => match(true) {
                        $record->rank_gt <= 3 => 'success',
                        $record->rank_gt <= 10 => 'info',
                        default => 'gray'
                    }),

                Tables\Columns\TextColumn::make('selisih_rank')
                    ->label('Selisih')
                    ->sortable()
                    ->alignCenter()
                    ->badge()
                    ->color(fn ($state) => match(true) {
                        $state > 0 => 'success',
                        $state < 0 => 'danger',
                        default => 'gray'
                    })
                    ->formatStateUsing(fn ($state) => $state > 0 ? "+{$state}" : $state),

                Tables\Columns\TextColumn::make('selisih_abs')
                    ->label('Selisih Abs')
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('rank_pca', 'asc')
            ->striped()
            ->paginated([5, 10, 20, 50]);
    }

    public static function canView(): bool
    {
        return true;
    }

    protected function getTableHeading(): ?string
    {
        return 'Peringkat IKP dan GT - Kabupaten/Kota';
    }

    protected function getTableDescription(): ?string
    {
        return 'Perbandingan peringkat berdasarkan Indeks Kualitas Pelayanan (IKP) dan Green Technology (GT)';
    }
}
