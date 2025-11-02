<?php

namespace App\Filament\Resources\InflasiSumbarResource\Pages;

use App\Filament\Resources\InflasiSumbarResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Storage;
use App\Models\InflasiSumbar;

class ManageInflasiSumbars extends ManageRecords
{
    protected static string $resource = InflasiSumbarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('import')
                ->label('Import CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    \Filament\Forms\Components\FileUpload::make('csv_file')
                        ->label('Pilih File CSV')
                        ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel'])
                        ->helperText('Upload file CSV dengan header: Tahun, Bulan, Kabupaten Dharmasraya, Kabupaten Pasaman Barat, Kota Padang, Kota Bukittinggi, Provinsi')
                        ->required()
                        ->disk('public')
                        ->directory('csv-imports'),
                ])
                ->action(function (array $data) {
                    $path = Storage::disk('public')->path($data['csv_file']);
                    $fileContents = file_get_contents($path);
                    $rows = explode("\n", $fileContents);
                    $header = str_getcsv(array_shift($rows));

                    foreach ($rows as $row) {
                        if (empty(trim($row))) continue;

                        $rowData = str_getcsv($row);
                        $data = array_combine($header, $rowData);

                        // Fungsi untuk menghandle nilai kosong ('-') menjadi NULL
                        $parseValue = function ($value) {
                            $value = trim($value);
                            return ($value === '-' || $value === '') ? null : (float) $value;
                        };

                        // Cek duplikat berdasarkan tahun dan bulan
                        if (InflasiSumbar::where('tahun', $data['Tahun'])->where('bulan', $data['Bulan'])->exists()) {
                            continue;
                        }

                        InflasiSumbar::create([
                            'tahun' => $data['Tahun'],
                            'bulan' => $data['Bulan'],
                            'kabupaten_dharmasraya' => $parseValue($data['Kabupaten Dharmasraya']),
                            'kabupaten_pasaman_barat' => $parseValue($data['Kabupaten Pasaman Barat']),
                            'kota_padang' => $parseValue($data['Kota Padang']),
                            'kota_bukittinggi' => $parseValue($data['Kota Bukittinggi']),
                            'provinsi' => $parseValue($data['Provinsi']),
                        ]);
                    }
                }),
        ];
    }
}
