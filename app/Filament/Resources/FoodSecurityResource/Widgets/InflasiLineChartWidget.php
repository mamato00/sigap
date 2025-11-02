<?php

namespace App\Filament\Widgets;

use App\Models\InflasiSumbar;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class InflasiLineChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Grafik Inflasi Sumatera Barat';

    // Agar grafik memenuhi lebar dashboard
    protected int | string | array $columnSpan = '1';

   /**
     * Mengambil data untuk grafik.
     */
    protected function getData(): array
    {
        // 1. Definisikan wilayah yang akan ditampilkan di grafik
        $regions = [
            'kabupaten_dharmasraya' => 'Kab. Dharmasraya',
            'kabupaten_pasaman_barat' => 'Kab. Pasaman Barat',
            'kota_padang' => 'Kota Padang',
            'kota_bukittinggi' => 'Kota Bukittinggi',
            'provinsi' => 'Provinsi',
        ];

        // 2. Ambil data dari database, urutkan berdasarkan tahun dan bulan
        $inflasiData = InflasiSumbar::orderBy('tahun')
            ->orderByRaw("FIELD(bulan, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember')")
            ->get();

        // 3. Siapkan struktur data untuk grafik
        $labels = []; // Label untuk sumbu X (misal: "Jan 2025")
        $datasets = []; // Data untuk setiap garis (wilayah)

        // Inisialisasi dataset untuk setiap wilayah
        foreach ($regions as $key => $label) {
            $datasets[] = [
                'label' => $label,
                'data' => [],
                'borderColor' => $this->getRegionColor($key),
                'backgroundColor' => $this->getRegionColor($key) . '33', // Tambahkan transparansi
                'tension' => 0.3, // Buat garis sedikit melengkung
            ];
        }

        // TAMBAHKAN ARRAY TERJEMAHAN INI
        $monthTranslation = [
            'Januari' => 'January',
            'Februari' => 'February',
            'Maret' => 'March',
            'April' => 'April',
            'Mei' => 'May',
            'Juni' => 'June',
            'Juli' => 'July',
            'Agustus' => 'August',
            'September' => 'September',
            'Oktober' => 'October',
            'November' => 'November',
            'Desember' => 'December',
        ];

        // 4. Isi label dan data dari hasil query
        foreach ($inflasiData as $data) {
            // Terjemahkan bulan Indonesia ke Inggris
            $englishMonth = $monthTranslation[$data->bulan] ?? 'January';

            // Buat label singkat untuk sumbu X
            $labels[] = Carbon::createFromFormat('F Y', $englishMonth . ' ' . $data->tahun)->format('M y');

            // Tambahkan data untuk setiap wilayah
            $datasets[0]['data'][] = $data->kabupaten_dharmasraya;
            $datasets[1]['data'][] = $data->kabupaten_pasaman_barat;
            $datasets[2]['data'][] = $data->kota_padang;
            $datasets[3]['data'][] = $data->kota_bukittinggi;
            $datasets[4]['data'][] = $data->provinsi;
        }

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    /**
     * Tentukan jenis grafik (line, bar, pie, dll).
     */
    protected function getType(): string
    {
        return 'line';
    }

    /**
     * Fungsi helper untuk memberikan warna yang berbeda pada setiap wilayah.
     */
    private function getRegionColor(string $key): string
    {
        $colors = [
            'kabupaten_dharmasraya' => '#ef4444', // red-500
            'kabupaten_pasaman_barat' => '#f97316', // orange-500
            'kota_padang' => '#eab308', // yellow-500
            'kota_bukittinggi' => '#22c55e', // green-500
            'provinsi' => '#3b82f6', // blue-500
        ];

        return $colors[$key] ?? '#6b7280'; // gray-500 sebagai default
    }
}
