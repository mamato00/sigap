<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RankingPcaGtResource\Pages;
use App\Filament\Resources\RankingPcaGtResource\RelationManagers;
use App\Models\RankingPcaGt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RankingPcaGtResource extends Resource
{
    protected static ?string $model = RankingPcaGt::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kabkot')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sfsi')
                    ->label('SFSI')
                    ->numeric() // Menjadikan input sebagai angka
                    ->step(0.0000000001), // Mengatur presisi desimal
                Forms\Components\TextInput::make('ikp')
                    ->label('IKP')
                    ->numeric()
                    ->step(0.0000000001),
                Forms\Components\TextInput::make('rank_pca')
                    ->label('Rank PCA')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('rank_gt')
                    ->label('Rank GT')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('selisih_rank')
                    ->label('Selisih Rank')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('selisih_abs')
                    ->label('Selisih Absolut')
                    ->numeric()
                    ->default(0),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kabkot')
                    ->label('Kabupaten/Kota')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sfsi')
                    ->label('SFSI')
                    ->formatStateUsing(fn (string $state): string => number_format($state, 10))
                    ->sortable(),
                Tables\Columns\TextColumn::make('ikp')
                    ->label('IKP')
                    ->formatStateUsing(fn (string $state): string => number_format($state, 10))
                    ->sortable(),
                Tables\Columns\TextColumn::make('rank_pca')
                    ->label('Rank PCA')
                    ->sortable(),
                Tables\Columns\TextColumn::make('rank_gt')
                    ->label('Rank GT')
                    ->sortable(),
                Tables\Columns\TextColumn::make('selisih_rank')
                    ->label('Selisih Rank')
                    ->formatStateUsing(function ($state) {
                        // Tampilkan tanda + untuk positif
                        $prefix = $state > 0 ? '+' : '';
                        return $prefix . $state;
                    })
                    ->color(fn ($state): string => match (true) {
                        $state > 0 => 'success', // Hijau untuk positif
                        $state < 0 => 'danger',  // Merah untuk negatif
                        default => 'warning',    // Kuning untuk nol
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('selisih_abs')
                    ->label('Selisih Absolut')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRankingPcaGts::route('/'),
            'create' => Pages\CreateRankingPcaGt::route('/create'),
            'edit' => Pages\EditRankingPcaGt::route('/{record}/edit'),
        ];
    }
}
