<?php

// app/Http/Controllers/PeringkatPanganController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import model yang akan digunakan
use App\Models\RankingPcaGt;
use App\Models\FoodSecurity;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PeringkatPanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari model, diurutkan berdasarkan rank_gt
        $dataPeringkat = RankingPcaGt::orderBy('rank_gt', 'asc')->get();

        // Kirim data ke view
        return view('peringkat-pangan.index', compact('dataPeringkat'));
    }

    /**
     * Download food security data as CSV
     */
    public function downloadFoodSecurityData()
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="data_ketahanan_pangan.csv"',
        ];

        $callback = function() {
            $file = fopen('php://output', 'w');

            // Add CSV headers
            fputcsv($file, [
                'Desa', 'Kecamatan', 'Provinsi', 'Kabupaten/Kota',
                'BUI', 'NDBI', 'NTL', 'RWI', 'Hutan', 'Sawah', 'EVI', 'LST',
                'NDMI', 'NDVI', 'SAVI', 'Jarak Air Bersih', 'Jarak Fasilitas Kesehatan',
                'Jarak Fasilitas Pendidikan', 'Jarak Fasilitas Penyedia Pangan',
                'Density Fasilitas Pendidikan', 'Density Sosial Ekonomi',
                'Density Fasilitas Kesehatan', 'Latitude', 'Longitude',
                'Indeks Ketahanan Pangan', 'Status Ketahanan Pangan'
            ]);

            // Get data from FoodSecurity model
            $foodSecurityData = FoodSecurity::all();

            // Add data rows
            foreach ($foodSecurityData as $data) {
                fputcsv($file, [
                    $data->desa,
                    $data->kecamatan,
                    $data->provinsi,
                    $data->kabkot,
                    $data->bui,
                    $data->ndbi,
                    $data->ntl,
                    $data->rwi,
                    $data->hutan,
                    $data->sawah,
                    $data->evi,
                    $data->lst,
                    $data->ndmi,
                    $data->ndvi,
                    $data->savi,
                    $data->jarak_air_bersih,
                    $data->jarak_fasilitas_kesehatan,
                    $data->jarak_fasilitas_pendidikan,
                    $data->jarak_fasilitas_penyedia_pangan,
                    $data->density_fpendidikan,
                    $data->density_sosek,
                    $data->density_fkesehatan,
                    $data->latitude,
                    $data->longitude,
                    $data->food_security_index,
                    $data->food_security_status
                ]);
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
}
