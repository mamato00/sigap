<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Peringkat Ketahanan Pangan - SIGAP Pangan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .data-section {
            padding: 160px 0 60px;
            background: #f8f9fa;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--heading-color, #2c3e50);
            margin-bottom: 15px;
        }

        .section-header p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .data-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            padding: 30px;
        }

        .table-container {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table thead th {
            background-color: #38a874;
            color: white;
            font-weight: 600;
            padding: 15px;
            text-align: center;
            white-space: nowrap;
        }

        .data-table tbody td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
            vertical-align: middle;
        }

        .data-table tbody tr:nth-of-type(even) {
            background-color: rgba(248, 249, 250, 0.5);
        }

        .data-table tbody tr:hover {
            background-color: #e9f5f0;
        }

        .rank-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 50px;
            font-weight: 600;
            color: white;
        }
        .rank-1 { background-color: #FFD700; color: #333; }
        .rank-2 { background-color: #C0C0C0; color: #333; }
        .rank-3 { background-color: #CD7F32; color: #fff; }
        .rank-other { background-color: #6c757d; }

        .selisih-positive { color: #dc3545; }
        .selisih-negative { color: #198754; }
        .selisih-zero { color: #6c757d; }

        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .btn-download {
            background-color: #38a874;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-download:hover {
            background-color: #2d8a5f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(56, 168, 116, 0.3);
        }

        .btn-download i {
            margin-right: 8px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ route('home') }}" class="d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/logo.png') }}" alt="SIGAP Pangan" style="width: 12em">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}#hero">Beranda</a></li>
                    <li><a href="{{ route('home') }}#about">Tentang</a></li>
                    <li><a href="{{ route('home') }}#features">Fitur</a></li>
                    <li><a href="{{ route('home') }}#services">Layanan</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('peringkat-pangan.index') }}" class="active">Data Pangan & Peringkat Ketahanan Pangan</a></li>
                            <li><a href="{{ route('peta-interaktif') }}">Peta Interaktif</a></li>
                            <li><a href="{{ route('home') }}#faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ url('admin') }}">Dashboard</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
        <section class="data-section">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header text-center" data-aos="fade-up">
                    <h2>Data Pangan Sumatera Barat</h2>
                    <p>Berikut adalah data peringkat ketahanan pangan berdasarkan Indeks Ketahanan Pangan (IKP) dan Food Security Score Index (SFSI) di setiap Kabupaten/Kota.</p>
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="50">
                        <a href="{{ route('download.food-security') }}" class="btn-download">
                            <i class="bi bi-download"></i> Unduh Data Ketahanan Pangan
                        </a>
                    </div>
                </div>

                <div class="section-header text-center" data-aos="fade-up">
                    <h2>Peringkat Ketahanan Pangan Sumatera Barat</h2>
                </div>

                <!-- Data Card -->
                <div class="data-card fade-in" data-aos="fade-up" data-aos-delay="100">
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Indeks Ketahanan Pangan (IKP)</th>
                                    <th>Food Security Score Index (SFSI)</th>
                                    <th>Rank PCA</th>
                                    <th>Selisih Rank</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPeringkat as $index => $item)
                                <tr>
                                    <td>
                                        <span class="rank-badge rank-{{ $item['rank_gt'] <= 3 ? $item['rank_gt'] : 'other' }}">
                                            {{ $item['rank_gt'] }}
                                        </span>
                                    </td>
                                    <td style="text-align: left; font-weight: 500;">{{ $item['kabkot'] }}</td>
                                    <td>{{ number_format($item['ikp'], 2) }}</td>
                                    <td>{{ number_format($item['sfsi'], 4) }}</td>
                                    <td>{{ $item['rank_pca'] }}</td>
                                    <td>
                                        <span class="fw-bold
                                            @if($item['selisih_rank'] > 0) selisih-positive
                                            @elseif($item['selisih_rank'] < 0) selisih-negative
                                            @else selisih-zero
                                            @endif
                                        ">
                                            {{ $item['selisih_rank'] > 0 ? '+' : '' }}{{ $item['selisih_rank'] }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                        <span class="sitename">SIGAP Pangan</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Jaksa Agung R. Soeprapto No. 19</p>
                        <p>Padang, Sumatera Barat</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>(0751) 7054161</span></p>
                        <p><strong>Email:</strong> <span>dinaspangansumbar@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Penting</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('home') }}#about">Tentang Kami</a></li>
                        <li><a href="{{ route('home') }}#services">Layanan</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Pemetaan Ketahanan Pangan</a></li>
                        <li><a href="#">Analisis Prediktif</a></li>
                        <li><a href="#">Dashboard Monitoring</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">SIGAP Pangan</strong> <span>Semua Hak Dilindungi</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
