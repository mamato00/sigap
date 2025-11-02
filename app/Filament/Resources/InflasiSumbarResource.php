<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InflasiSumbarResource\Pages;
use App\Filament\Resources\InflasiSumbarResource\RelationManagers;
use App\Models\InflasiSumbar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InflasiSumbarResource extends Resource
{
    protected static ?string $model = InflasiSumbar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric()
                    ->default(date('Y')),
                Forms\Components\Select::make('bulan')
                    ->required()
                    ->options([
                        'Januari' => 'Januari',
                        'Februari' => 'Februari',
                        'Maret' => 'Maret',
                        'April' => 'April',
                        'Mei' => 'Mei',
                        'Juni' => 'Juni',
                        'Juli' => 'Juli',
                        'Agustus' => 'Agustus',
                        'September' => 'September',
                        'Oktober' => 'Oktober',
                        'November' => 'November',
                        'Desember' => 'Desember',
                    ]),
                Forms\Components\TextInput::make('kabupaten_dharmasraya')
                    ->label('Kab. Dharmasraya')
                    ->numeric()
                    ->step(0.01),
                Forms\Components\TextInput::make('kabupaten_pasaman_barat')
                    ->label('Kab. Pasaman Barat')
                    ->numeric()
                    ->step(0.01),
                Forms\Components\TextInput::make('kota_padang')
                    ->label('Kota Padang')
                    ->numeric()
                    ->step(0.01),
                Forms\Components\TextInput::make('kota_bukittinggi')
                    ->label('Kota Bukittinggi')
                    ->numeric()
                    ->step(0.01),
                Forms\Components\TextInput::make('provinsi')
                    ->numeric()
                    ->step(0.01),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten_dharmasraya')
                    ->label('Kab. Dharmasraya')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 2) : '-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten_pasaman_barat')
                    ->label('Kab. Pasaman Barat')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 2) : '-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kota_padang')
                    ->label('Kota Padang')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 2) : '-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kota_bukittinggi')
                    ->label('Kota Bukittinggi')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 2) : '-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state, 2) : '-')
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
            'index' => Pages\ManageInflasiSumbars::route('/'),
            'create' => Pages\CreateInflasiSumbar::route('/create'),
            'edit' => Pages\EditInflasiSumbar::route('/{record}/edit'),
        ];
    }
}
