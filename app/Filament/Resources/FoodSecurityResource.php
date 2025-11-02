<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodSecurityResource\Pages;
use App\Filament\Resources\FoodSecurityResource\RelationManagers;
use App\Models\FoodSecurity;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class FoodSecurityResource extends Resource
{
    protected static ?string $model = FoodSecurity::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationLabel = 'Data Ketahanan Pangan';

    protected static ?string $modelLabel = 'Data Ketahanan Pangan';

    protected static ?string $pluralModelLabel = 'Data Ketahanan Pangan';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Lokasi')
                    ->schema([
                        TextInput::make('desa')
                            ->label('Desa')
                            ->required(),
                        TextInput::make('kecamatan')
                            ->label('Kecamatan')
                            ->required(),
                        TextInput::make('provinsi')
                            ->label('Provinsi')
                            ->required(),
                        TextInput::make('kabkot')
                            ->label('Kabupaten/Kota')
                            ->required(),
                        TextInput::make('latitude')
                            ->label('Latitude')
                            ->numeric()
                            ->step(0.00000001),
                        TextInput::make('longitude')
                            ->label('Longitude')
                            ->numeric()
                            ->step(0.00000001),
                    ]),
                Section::make('Indeks Vegetasi')
                    ->schema([
                        TextInput::make('bui')
                            ->label('BUI')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('ndbi')
                            ->label('NDBI')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('ntl')
                            ->label('NTL')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('rwi')
                            ->label('RWI')
                            ->numeric()
                            ->step(0.001),
                        TextInput::make('evi')
                            ->label('EVI')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('ndmi')
                            ->label('NDMI')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('ndvi')
                            ->label('NDVI')
                            ->numeric()
                            ->step(0.0000000001),
                        TextInput::make('savi')
                            ->label('SAVI')
                            ->numeric()
                            ->step(0.0000000001),
                    ])
                    ->columns(2),
                Section::make('Data Lahan')
                    ->schema([
                        TextInput::make('hutan')
                            ->label('Luas Hutan (m²)')
                            ->numeric()
                            ->step(0.0001),
                        TextInput::make('sawah')
                            ->label('Luas Sawah (m²)')
                            ->numeric()
                            ->step(0.0001),
                        TextInput::make('lst')
                            ->label('LST (°C)')
                            ->numeric()
                            ->step(0.01),
                    ])
                    ->columns(3),
                Section::make('Aksesibilitas')
                    ->schema([
                        TextInput::make('jarak_air_bersih')
                            ->label('Jarak ke Air Bersih (km)')
                            ->numeric()
                            ->step(0.01),
                        TextInput::make('jarak_fasilitas_kesehatan')
                            ->label('Jarak ke Fasilitas Kesehatan (km)')
                            ->numeric()
                            ->step(0.01),
                        TextInput::make('jarak_fasilitas_pendidikan')
                            ->label('Jarak ke Fasilitas Pendidikan (km)')
                            ->numeric()
                            ->step(0.01),
                        TextInput::make('jarak_fasilitas_penyedia_pangan')
                            ->label('Jarak ke Fasilitas Penyedia Pangan (km)')
                            ->numeric()
                            ->step(0.01),
                    ])
                    ->columns(2),
                Section::make('Kepadatan')
                    ->schema([
                        TextInput::make('density_fpendidikan')
                            ->label('Kepadatan Fasilitas Pendidikan')
                            ->numeric(),
                        TextInput::make('density_sosek')
                            ->label('Kepadatan Fasilitas Sosial Ekonomi')
                            ->numeric(),
                        TextInput::make('density_fkesehatan')
                            ->label('Kepadatan Fasilitas Kesehatan')
                            ->numeric(),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('desa')
                    ->label('Desa')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('provinsi')
                    ->label('Provinsi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kabkot')
                    ->label('Kabupaten/Kota')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('bui')
                    ->label('BUI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ndbi')
                    ->label('NDBI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ntl')
                    ->label('NTL')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('rwi')
                    ->label('RWI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hutan')
                    ->label('Hutan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sawah')
                    ->label('Sawah')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('evi')
                    ->label('EVI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('lst')
                    ->label('LST (°C)')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ndmi')
                    ->label('NDMI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ndvi')
                    ->label('NDVI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('savi')
                    ->label('SAVI')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jarak_air_bersih')
                    ->label('Jarak Air Bersih')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jarak_fasilitas_kesehatan')
                    ->label('Jarak Fasilitas Kesehatan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jarak_fasilitas_pendidikan')
                    ->label('Jarak Fasilitas Pendidikan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jarak_fasilitas_penyedia_pangan')
                    ->label('Jarak Fasilitas Penyedia Pangan')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('provinsi')
                    ->label('Provinsi')
                    ->options(function () {
                        return FoodSecurity::distinct()->pluck('provinsi', 'provinsi');
                    }),
                SelectFilter::make('kabkot')
                    ->label('Kabupaten/Kota')
                    ->options(function () {
                        return FoodSecurity::distinct()->pluck('kabkot', 'kabkot');
                    }),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ManageFoodSecurities::route('/'),
            'create' => Pages\CreateFoodSecurity::route('/create'),
            'view' => Pages\ViewFoodSecurity::route('/{record}'),
            'edit' => Pages\EditFoodSecurity::route('/{record}/edit'),
        ];
    }
}
