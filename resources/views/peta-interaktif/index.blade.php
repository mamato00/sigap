<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Galeri Peta - SIGAP Pangan</title>

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

        .zoom-container {
            cursor: move;
            overflow: hidden;
            position: relative;
            background: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .zoom-image {
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform-origin: center center;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .btn-zoom {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .btn-zoom:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            background-color: #38a874 !important;
            border-color: #38a874 !important;
        }

        .btn-primary:hover {
            background-color: #38a874 !important;
            border-color: #38a874 !important;
        }

        .btn-nav {
            transition: all 0.3s ease;
            border: none;
            padding: 12px 24px;
            font-weight: 600;
        }

        .btn-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        }

        .image-indicator {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .image-indicator.active {
            background: #38a874;
            transform: scale(1.3);
        }

        .image-indicator:hover {
            transform: scale(1.2);
            opacity: 0.8;
        }

        .gallery-section {
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

        .gallery-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            padding: 30px;
        }

        .zoom-controls {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .image-description {
            text-align: center;
            padding: 20px;
        }

        .image-description .counter {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 8px;
        }

        .image-description .title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--heading-color, #2c3e50);
        }

        .navigation-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .navigation-controls {
                flex-direction: column;
            }

            .btn-nav {
                width: 100%;
                justify-content: center;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease;
        }

        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
                            <li><a href="{{ route('peringkat-pangan.index') }}">Data Pangan & Peringkat Ketahanan Pangan</a></li>
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
        <section class="gallery-section">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header text-center" data-aos="fade-up">
                    <h2>Peta Ketahanan Pangan dan Persebaran Data di Sumatera Barat</h2>
                </div>

                <!-- Gallery Card -->
                <div class="gallery-card fade-in" data-aos="fade-up" data-aos-delay="100">
                    <!-- Zoom Controls -->
                    <div class="zoom-controls">
                        <button onclick="zoomOut()" class="btn btn-light btn-zoom">
                            <i class="bi bi-dash-circle"></i> Zoom Out
                        </button>
                        <button onclick="resetZoom()" class="btn btn-light btn-zoom">
                            <i class="bi bi-arrow-clockwise"></i> Reset
                        </button>
                        <button onclick="zoomIn()" class="btn btn-success btn-zoom">
                            <i class="bi bi-plus-circle"></i> Zoom In
                        </button>
                    </div>

                    <!-- Image Container -->
                    <div class="zoom-container" style="height: 550px;" id="imageContainer">
                        <img id="mainImage"
                             src="{{ $images[0]['path'] }}"
                             alt="Peta"
                             class="zoom-image"
                             draggable="false">
                    </div>

                    <!-- Image Description -->
                    <div class="image-description">
                        <div class="counter">
                            Gambar <span id="currentIndex">1</span> dari <span id="totalImages">{{ count($images) }}</span>
                        </div>
                        <div class="title" id="imageDescription">
                            {{ $images[0]['description'] }}
                        </div>
                    </div>

                    <!-- Image Indicators -->
                    <div class="d-flex justify-content-center gap-2 my-4" id="indicators">
                        @foreach($images as $index => $image)
                        <div class="image-indicator {{ $index === 0 ? 'active' : '' }}"
                             onclick="goToImage({{ $index }})"
                             style="width: 12px; height: 12px; border-radius: 50%; background: #dee2e6;">
                        </div>
                        @endforeach
                    </div>

                    <!-- Navigation Controls -->
                    <div class="navigation-controls">
                        <button onclick="previousImage()" class="btn btn-primary btn-nav d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-left"></i>
                            <span>Sebelumnya</span>
                        </button>

                        <button onclick="nextImage()" class="btn btn-primary btn-nav d-flex align-items-center gap-2">
                            <span>Selanjutnya</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
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

    <!-- Gallery Functionality -->
    <script>
        let currentImageIndex = 0;
        let images = @json($images);
        let zoomLevel = 1;
        let isDragging = false;
        let startX, startY, translateX = 0, translateY = 0;

        const imageElement = document.getElementById('mainImage');
        const container = document.getElementById('imageContainer');

        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Zoom Functions
        function zoomIn() {
            zoomLevel = Math.min(zoomLevel + 0.3, 3);
            applyZoom();
        }

        function zoomOut() {
            zoomLevel = Math.max(zoomLevel - 0.3, 1);
            if (zoomLevel === 1) {
                translateX = 0;
                translateY = 0;
            }
            applyZoom();
        }

        function resetZoom() {
            zoomLevel = 1;
            translateX = 0;
            translateY = 0;
            applyZoom();
        }

        function applyZoom() {
            imageElement.style.transform = `translate(${translateX}px, ${translateY}px) scale(${zoomLevel})`;
        }

        // Drag Functions
        container.addEventListener('mousedown', (e) => {
            if (zoomLevel > 1) {
                isDragging = true;
                startX = e.clientX - translateX;
                startY = e.clientY - translateY;
                container.style.cursor = 'grabbing';
            }
        });

        container.addEventListener('mousemove', (e) => {
            if (isDragging) {
                translateX = e.clientX - startX;
                translateY = e.clientY - startY;
                applyZoom();
            }
        });

        container.addEventListener('mouseup', () => {
            isDragging = false;
            if (zoomLevel > 1) {
                container.style.cursor = 'move';
            } else {
                container.style.cursor = 'default';
            }
        });

        container.addEventListener('mouseleave', () => {
            isDragging = false;
            container.style.cursor = 'default';
        });

        // Navigation Functions
        function updateImage() {
            resetZoom();
            imageElement.style.opacity = '0';

            setTimeout(() => {
                imageElement.src = images[currentImageIndex].path;
                document.getElementById('imageDescription').textContent = images[currentImageIndex].description;
                document.getElementById('currentIndex').textContent = currentImageIndex + 1;

                updateIndicators();
                imageElement.style.opacity = '1';
            }, 200);
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.image-indicator');
            indicators.forEach((indicator, index) => {
                if (index === currentImageIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            updateImage();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            updateImage();
        }

        function goToImage(index) {
            currentImageIndex = index;
            updateImage();
        }

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') previousImage();
            if (e.key === '+' || e.key === '=') zoomIn();
            if (e.key === '-') zoomOut();
            if (e.key === '0') resetZoom();
        });
    </script>
</body>
</html>
