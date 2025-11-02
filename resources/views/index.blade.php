<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SIGAP Pangan - Sistem Informasi Geospasial Analisis Ketahanan Pangan</title>
  <meta name="description" content="Platform terpadu untuk analisis ketahanan pangan berbasis geospasial di Indonesia">
  <meta name="keywords" content="ketahanan pangan, geospasial, analisis pangan, SIG, sistem informasi geografis">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="/assets/img/logo.png" alt="">
        <h1 class="sitename">SIGAP Pangan</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}#hero" class="active">Beranda</a></li>
          <li><a href="{{ route('home') }}#about">Tentang</a></li>
          <li><a href="{{ route('home') }}#features">Fitur</a></li>
          <li><a href="{{ route('home') }}#services">Layanan</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Data Pangan</a></li>
              <li class="dropdown"><a href="#"><span>Peta Interaktif</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Peta Ketersediaan Pangan</a></li>
                  <li><a href="#">Peta Aksesibilitas Pangan</a></li>
                  <li><a href="#">Peta Utilisasi Pangan</a></li>
                  <li><a href="#">Peta Stabilitas Pangan</a></li>
                  <li><a href="#">Peta Kerawanan Pangan</a></li>
                </ul>
              </li>
              <li><a href="#">Publikasi</a></li>
              <li><a href="#">Berita</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </li>
          <li><a href="{{ route('home') }}#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ 'admin' }}">Dashboard</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="/assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Sistem Informasi Geospasial <span>Analisis Ketahanan Pangan</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Platform terpadu untuk monitoring dan analisis ketahanan pangan berbasis geospasial di Indonesia<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Mulai Sekarang</a>
            <a href="" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Demo</span></a>
          </div>
          <img src="/assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-map"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Pemetaan Geospasial</a></h4>
                <p class="description">Visualisasi data ketahanan pangan secara spasial untuk analisis pola distribusi dan kerawanan pangan</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-graph-up"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Analisis Prediktif</a></h4>
                <p class="description">Model prediksi kerawanan pangan berbasis machine learning untuk perencanaan strategis</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-database"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Integrasi Data</a></h4>
                <p class="description">Konsolidasi data dari berbagai sumber untuk analisis komprehensif ketahanan pangan</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Tentang SIGAP Pangan</p>
            <h3>Platform Inovatif untuk Analisis Ketahanan Pangan Berbasis Geospasial</h3>
            <p class="fst-italic">
              SIGAP Pangan adalah sistem informasi geospasial yang dirancang khusus untuk analisis ketahanan pangan di Indonesia, mengintegrasikan data spasial dan atribut untuk memberikan wawasan mendalam.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Visualisasi data pangan secara real-time dengan peta interaktif.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Analisis multidimensi mencakup ketersediaan, aksesibilitas, utilisasi, dan stabilitas pangan.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Model prediktif untuk mengidentifikasi area berisiko tinggi kerawanan pangan.</span></li>
            </ul>
            <a href="{{ 'admin' }}" class="read-more"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="/assets/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="/assets/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="/assets/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fitur Unggulan</h2>
        <p>Alat canggih untuk analisis ketahanan pangan berbasis geospasial</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-map"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Peta Interaktif Ketahanan Pangan</h4>
                    <p>
                      Visualisasi spasial data ketahanan pangan dengan berbagai layer informasi yang dapat dikustomisasi
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-graph-up-arrow"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Analisis Prediktif</h4>
                    <p>
                      Model machine learning untuk memprediksi area berisiko tinggi kerawanan pangan berdasarkan data historis
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-database-add"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Integrasi Multi-Sumber Data</h4>
                    <p>
                      Konsolidasi data dari berbagai instansi dan sumber untuk analisis komprehensif ketahanan pangan
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="/assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="/assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="/assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="/assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Analisis Spasial Komprehensif</h3>
              <p>
                Platform kami menyediakan alat analisis spasial canggih untuk mengidentifikasi pola ketahanan pangan, hotspot kerawanan, dan faktor-faktor yang memengaruhinya di berbagai tingkatan administratif.
              </p>
              <a href="#" class="btn more-btn">Pelajari Lebih Lanjut</a>
            </div>
          </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Dashboard Monitoring Real-Time</h3>
              <p>
                Dashboard interaktif yang menampilkan indikator ketahanan pangan secara real-time dengan visualisasi data yang mudah dipahami oleh pengambil keputusan.
              </p>
              <ul>
                <li><i class="bi bi-easel flex-shrink-0"></i> Indikator ketersediaan pangan per wilayah.</li>
                <li><i class="bi bi-patch-check flex-shrink-0"></i> Monitoring aksesibilitas fisik dan ekonomi.</li>
                <li><i class="bi bi-brightness-high flex-shrink-0"></i> Analisis stabilitas pasokan pangan.</li>
              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Pelajari Lebih Lanjut</a>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="/assets/img/features-2.jpg" class="img-fluid" alt="">
          </div>

        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Details Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Solusi komprehensif untuk analisis ketahanan pangan berbasis geospasial</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-map icon"></i>
              <div>
                <h3>Pemetaan Ketahanan Pangan</h3>
                <p>Visualisasi spasial data ketahanan pangan dengan berbagai layer informasi yang dapat dikustomisasi sesuai kebutuhan analisis.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-graph-up-arrow icon"></i>
              <div>
                <h3>Analisis Prediktif</h3>
                <p>Model machine learning untuk memprediksi area berisiko tinggi kerawanan pangan berdasarkan data historis dan variabel iklim.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-database icon"></i>
              <div>
                <h3>Integrasi Data Pangan</h3>
                <p>Konsolidasi data dari berbagai sumber seperti BPS, Kementan, BMKG, dan instansi terkait untuk analisis komprehensif.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-clipboard-data icon"></i>
              <div>
                <h3>Dashboard Monitoring</h3>
                <p>Panel kontrol interaktif untuk monitoring indikator ketahanan pangan secara real-time dengan visualisasi data yang mudah dipahami.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-file-earmark-text icon"></i>
              <div>
                <h3>Laporan Analisis</h3>
                <p>Generasi laporan analisis ketahanan pangan otomatis dengan visualisasi data dan rekomendasi kebijakan berbasis bukti.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-people icon"></i>
              <div>
                <h3>Konsultasi & Pelatihan</h3>
                <p>Layanan konsultasi dan pelatihan untuk pemerintah daerah dalam implementasi sistem informasi ketahanan pangan.</p>
                <a href="#" class="read-more stretched-link">Pelajari Lebih Lanjut <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- More Features Section -->
    <section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h3>Platform Terintegrasi untuk Analisis Ketahanan Pangan</h3>
            <p>SIGAP Pangan mengintegrasikan berbagai data spasial dan atribut untuk memberikan analisis komprehensif tentang ketahanan pangan di Indonesia, dari tingkat nasional hingga desa.</p>

            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-map flex-shrink-0"></i>
                <div>
                  <h4>Pemetaan Spasial</h4>
                  <p>Visualisasi data ketahanan pangan secara spasial dengan berbagai layer informasi</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-graph-up flex-shrink-0"></i>
                <div>
                  <h4>Analisis Trend</h4>
                  <p>Identifikasi pola dan trend ketahanan pangan dari waktu ke waktu</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-exclamation-triangle flex-shrink-0"></i>
                <div>
                  <h4>Early Warning</h4>
                  <p>Sistem peringatan dini untuk mengidentifikasi area berisiko kerawanan pangan</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-people flex-shrink-0"></i>
                <div>
                  <h4>Kolaborasi</h4>
                  <p>Platform kolaborasi multi-stakeholder untuk perencanaan ketahanan pangan</p>
                </div>
              </div><!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="/assets/img/features-3.jpg" alt="">
          </div>

        </div>

      </div>

    </section><!-- /More Features Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan yang Sering Diajukan</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Apa itu SIGAP Pangan dan bagaimana cara kerjanya?</h3>
                <div class="faq-content">
                  <p>SIGAP Pangan adalah Sistem Informasi Geospasial Analisis Ketahanan Pangan yang mengintegrasikan data spasial dan atribut dari berbagai sumber untuk menganalisis ketahanan pangan di Indonesia. Sistem ini bekerja dengan mengumpulkan data, memprosesnya menjadi informasi yang bermakna, dan memvisualisasikannya dalam bentuk peta interaktif dan dashboard analisis.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Data apa saja yang tersedia di platform SIGAP Pangan?</h3>
                <div class="faq-content">
                  <p>Platform SIGAP Pangan menyediakan berbagai data terkait ketahanan pangan, termasuk data produksi pertanian, data distribusi pangan, data aksesibilitas fisik dan ekonomi, data konsumsi pangan, data harga pangan, data iklim, data sosial ekonomi, dan data infrastruktur terkait pangan. Semua data ini tersedia dalam berbagai tingkatan administratif dari nasional hingga desa.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana SIGAP Pangan dapat membantu pengambilan keputusan?</h3>
                <div class="faq-content">
                  <p>SIGAP Pangan membantu pengambilan keputusan dengan menyediakan visualisasi data yang mudah dipahami, analisis prediktif untuk mengidentifikasi area berisiko, dashboard monitoring real-time, dan laporan analisis komprehensif. Informasi ini memungkinkan pengambil keputusan untuk merencanakan intervensi yang tepat sasaran dan responsif terhadap tantangan ketahanan pangan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah data di SIGAP Pangan diperbarui secara berkala?</h3>
                <div class="faq-content">
                  <p>Ya, data di SIGAP Pangan diperbarui secara berkala sesuai dengan jadwal pembaruan dari sumber data asli. Data real-time seperti harga pangan diperbarui harian, data produksi pertanian diperbarui per musim tanam, dan data sensus atau survei diperbarui sesuai dengan periode pelaksanaan survei oleh instansi terkait.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana cara mendapatkan akses ke platform SIGAP Pangan?</h3>
                <div class="faq-content">
                  <p>Anda dapat mendaftar untuk uji coba gratis 14 hari melalui website kami. Setelah periode uji coba, Anda dapat memilih paket berlangganan yang sesuai dengan kebutuhan Anda. Untuk institusi pemerintah atau organisasi besar dengan kebutuhan khusus, Anda dapat menghubungi tim kami untuk diskusi lebih lanjut tentang solusi kustomisasi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah tersedia pelatihan untuk menggunakan platform SIGAP Pangan?</h3>
                <div class="faq-content">
                  <p>Ya, kami menyediakan pelatihan untuk pengguna platform SIGAP Pangan. Pelatihan mencakup pengenalan fitur dasar, analisis data, interpretasi hasil, dan penggunaan lanjutan untuk paket Profesional dan Enterprise. Pelatihan dapat dilakukan secara online atau tatap muka tergantung pada paket berlangganan Anda.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni Pengguna</h2>
        <p>Apa kata pengguna tentang platform SIGAP Pangan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  SIGAP Pangan telah membantu kami mengidentifikasi area rawan pangan di provinsi kami dengan lebih akurat. Visualisasi data spasial yang disediakan sangat membantu dalam perencanaan intervensi ketahanan pangan yang tepat sasaran.
                </p>
                <div class="profile mt-auto">
                  <img src="/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Dr. Budi Santoso</h3>
                  <h4>Kepala Dinas Pertanian Provinsi Jawa Timur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Sebagai peneliti ketahanan pangan, saya sangat terbantu dengan fitur analisis prediktif dari SIGAP Pangan. Platform ini memungkinkan saya mengidentifikasi faktor-faktor yang memengaruhi kerawanan pangan dan memodelkan skenario masa depan.
                </p>
                <div class="profile mt-auto">
                  <img src="/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Prof. Siti Rahayu</h3>
                  <h4>Peneliti Senior, Lembaga Pangan Nasional</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Dashboard monitoring real-time dari SIGAP Pangan telah menjadi alat penting dalam pengambilan keputusan kami. Kami dapat merespons dengan cepat terhadap perubahan kondisi ketahanan pangan di wilayah kami.
                </p>
                <div class="profile mt-auto">
                  <img src="/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Ahmad Wijaya</h3>
                  <h4>Kepala Badan Ketahanan Pangan Kabupaten</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Integrasi data dari berbagai sumber dalam satu platform sangat menghemat waktu kami dalam analisis ketahanan pangan. SIGAP Pangan telah menyederhanakan proses yang sebelumnya memakan waktu berbulan-bulan menjadi hanya beberapa hari.
                </p>
                <div class="profile mt-auto">
                  <img src="/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Dewi Lestari</h3>
                  <h4>Analis Data, Kementerian Pertanian</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Sebagai NGO yang fokus pada ketahanan pangan, SIGAP Pangan membantu kami mengidentifikasi komunitas yang paling membutuhkan bantuan dan merancang program intervensi yang lebih efektif. Platform ini benar-benar mengubah cara kami bekerja.
                </p>
                <div class="profile mt-auto">
                  <img src="/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Rizki Hakim</h3>
                  <h4>Direktur Program, Yayasan Ketahanan Pangan Indonesia</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Kami</h2>
        <p>Hubungi kami untuk informasi lebih lanjut tentang SIGAP Pangan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Merdeka No. 123, Jakarta Pusat</p>
              <p>DKI Jakarta 10110</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Telepon</h3>
              <p>+62 21 1234 5678</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>info@sigappangan.id</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Memuat</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">SIGAP Pangan</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Merdeka No. 123</p>
            <p>Jakarta Pusat, DKI Jakarta 10110</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 21 1234 5678</span></p>
            <p><strong>Email:</strong> <span>info@sigappangan.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan Penting</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Pemetaan Ketahanan Pangan</a></li>
            <li><a href="#">Analisis Prediktif</a></li>
            <li><a href="#">Dashboard Monitoring</a></li>
            <li><a href="#">Laporan Analisis</a></li>
            <li><a href="#">Konsultasi & Pelatihan</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Newsletter Kami</h4>
          <p>Dapatkan informasi terbaru tentang analisis ketahanan pangan dan update platform SIGAP Pangan</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Berlangganan"></div>
            <div class="loading">Memuat</div>
            <div class="error-message"></div>
            <div class="sent-message">Permintaan berlangganan Anda telah terkirim. Terima kasih!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">SIGAP Pangan</strong><span>Semua Hak Dilindungi</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Dikembangkan oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

  <!-- Custom JS for Smooth Scroll -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Handle direct links with hash
    if (window.location.hash) {
      const target = document.querySelector(window.location.hash);
      if (target) {
        setTimeout(() => {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }, 500);
      }
    }
  });
  </script>

</body>

</html>
