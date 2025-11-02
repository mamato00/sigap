<?php

namespace App\Filament\Resources\FoodSecurityResource\Pages;

use App\Filament\Resources\FoodSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use app\Models\FoodSecurity;

class ManageFoodSecurities extends ManageRecords
{
    protected static string $resource = FoodSecurityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('import')
                ->label('Import CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    \Filament\Forms\Components\FileUpload::make('csv_file')
                        ->label('File CSV')
                        ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel'])
                        ->helperText('Upload file CSV dengan format yang sesuai')
                        ->required(),
                ])
                ->action(function (array $data) {
                    $file = Storage::disk('public')->get($data['csv_file']);
                    $rows = explode("\n", $file);
                    $header = str_getcsv(array_shift($rows));

                    foreach ($rows as $row) {
                        if (empty($row)) continue;

                        $data = array_combine($header, str_getcsv($row));

                        // Skip if OBJECTID already exists
                        if (FoodSecurity::where('desa', $data['Desa'])->where('kecamatan', $data['Kecamatan'])->exists()) {
                            continue;
                        }

                        FoodSecurity::create([
                            'desa' => $data['Desa'],
                            'kecamatan' => $data['Kecamatan'],
                            'provinsi' => $data['Provinsi'],
                            'kabkot' => $data['Kabkot'],
                            'bui' => $data['BUI'],
                            'ndbi' => $data['NDBI'],
                            'ntl' => $data['NTL'],
                            'rwi' => $data['RWI'],
                            'hutan' => $data['Hutan'],
                            'sawah' => $data['Sawah'],
                            'evi' => $data['EVI'],
                            'lst' => $data['LST'],
                            'ndmi' => $data['NDMI'],
                            'ndvi' => $data['NDVI'],
                            'savi' => $data['SAVI'],
                            'jarak_air_bersih' => $data['Jarak Air Bersih'],
                            'jarak_fasilitas_kesehatan' => $data['Jarak Fasilitas Kesehatan'],
                            'jarak_fasilitas_pendidikan' => $data['Jarak Fasilitas Pendidikan'],
                            'jarak_fasilitas_penyedia_pangan' => $data['Jarak Fasilitas Penyedia Pangan'],
                            'density_fpendidikan' => $data['Density_FPendidikan'],
                            'density_sosek' => $data['Density_Sosek'],
                            'density_fkesehatan' => $data['Density_FKesehatan'],
                        ]);
                    }
                }),
        ];
    }
}
