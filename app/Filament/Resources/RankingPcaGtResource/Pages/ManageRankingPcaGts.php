<?php

namespace App\Filament\Resources\RankingPcaGtResource\Pages;

use App\Filament\Resources\RankingPcaGtResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Storage;
use App\Models\RankingPcaGt; // Pastikan model di-import

class ManageRankingPcaGts extends ManageRecords
{
    protected static string $resource = RankingPcaGtResource::class;

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
                        ->helperText('Upload file CSV dengan header: Kabkot, SFSI, IKP, Rank_PCA, Rank_GT, Selisih_Rank, Selisih_Abs')
                        ->required()
                        ->disk('public') // Pastikan menggunakan disk 'public'
                        ->directory('csv-imports'), // Simpan file di folder ini
                ])
                ->action(function (array $data) {
                    // Ambil path file yang di-upload
                    $path = Storage::disk('public')->path($data['csv_file']);

                    // Baca isi file
                    $fileContents = file_get_contents($path);
                    $rows = explode("\n", $fileContents);

                    // Ambil baris pertama sebagai header
                    $header = str_getcsv(array_shift($rows));

                    foreach ($rows as $row) {
                        // Lewati baris kosong
                        if (empty(trim($row))) {
                            continue;
                        }

                        // Parse baris CSV menjadi array asosiatif
                        $rowData = str_getcsv($row);
                        $data = array_combine($header, $rowData);

                        // Cek apakah data dengan 'kabkot' yang sama sudah ada untuk menghindari duplikat
                        if (RankingPcaGt::where('kabkot', $data['Kabkot'])->exists()) {
                            // Opsional: Anda bisa update data yang ada di sini jika diperlukan
                            // RankingPcaGt::where('kabkot', $data['Kabkot'])->update([...]);
                            continue; // Lewati jika sudah ada
                        }

                        // Buat record baru di database
                        RankingPcaGt::create([
                            'kabkot' => $data['Kabkot'],
                            'sfsi' => is_numeric($data['SFSI']) ? $data['SFSI'] : 0,
                            'ikp' => is_numeric($data['IKP']) ? $data['IKP'] : 0,
                            'rank_pca' => is_numeric($data['Rank_PCA']) ? $data['Rank_PCA'] : 0,
                            'rank_gt' => is_numeric($data['Rank_GT']) ? $data['Rank_GT'] : 0,
                            'selisih_rank' => is_numeric($data['Selisih_Rank']) ? $data['Selisih_Rank'] : 0,
                            'selisih_abs' => is_numeric($data['Selisih_Abs']) ? $data['Selisih_Abs'] : 0,
                        ]);
                    }
                }),
        ];
    }
}
