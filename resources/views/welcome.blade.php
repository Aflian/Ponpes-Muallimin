<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-green: #2d5016;
            --secondary-green: #4a7c59;
            --light-green: #8fbc8f;
            --accent-green: #90EE90;
        }

        body {
            font-family: 'Poppins', sans-serif ;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background: white !important;
        }

        .hero-section {
            background: url({{asset('image.png')}});
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-size:cover;
            background-repeat:no-repeat;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.5;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .btn-primary-custom {
            background: var(--accent-green);
            border: none;
            color: var(--primary-green);
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background: white;
            color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .section-title {
            color: var(--primary-green);
            font-weight: bold;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-green);
        }

        .card {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header-custom {
            background: var(--secondary-green);
            color: white;
            font-weight: bold;
            border: none;
        }

        .news-card {
            transition: all 0.3s ease;
        }

        .news-card:hover {
            transform: scale(1.02);
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }

        .carousel-indicators button {
            background-color: var(--secondary-green);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        .footer {
            background: var(--primary-green);
            color: white;
        }

        .footer a {
            color: var(--accent-green);
            text-decoration: none;
        }

        .footer a:hover {
            color: white;
        }

        .stat-card {
            background: linear-gradient(135deg, var(--light-green), var(--accent-green));
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            color: var(--primary-green);
            margin-bottom: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
        }

        .organization-box {
            background: linear-gradient(135deg, var(--secondary-green), var(--primary-green));
            color: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 70vh;
                text-align: center;
            }

            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand text-success" href="#">
                <i class="fas fa-mosque me-2"></i>
                PP Muallimin Muhammadiyah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#history">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization">Organisasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#academic">Akademik</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision">Visi Misi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">
                        Selamat Datang di<br>
                        <span class="text-warning">Pondok Pesantren</span><br>
                        Muallimin Muhammadiyah<br>
                        Bangkinang Kota
                    </h1>
                    <p class="lead mb-4">
                        Membentuk generasi Muslim yang berakhlak mulia, cerdas, dan siap menghadapi tantangan zaman dengan berlandaskan nilai-nilai Islam dan kemuhammadiyahan.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#about" class="btn btn-primary-custom btn-lg">
                            <i class="fas fa-info-circle me-2"></i>Pelajari Lebih Lanjut
                        </a>
                        <a href="#academic" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-graduation-cap me-2"></i>Program Akademik
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image mt-5 mt-lg-0">
                        <i class="fas fa-mosque" style="font-size: 15rem; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Tentang Pondok Pesantren</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-success fw-bold mb-4">Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota</h3>
                    <p class="text-muted mb-4">
                        Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota adalah lembaga pendidikan Islam yang berkomitmen untuk menghasilkan lulusan yang tidak hanya unggul dalam bidang akademik, tetapi juga memiliki kepribadian yang Islami dan jiwa kepemimpinan yang kuat.
                    </p>
                    <p class="text-muted mb-4">
                        Dengan menggabungkan kurikulum pesantren tradisional dan pendidikan modern, kami berusaha menciptakan lingkungan belajar yang kondusif untuk pengembangan potensi santri secara optimal.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stat-card">
                                <div class="stat-number">500+</div>
                                <div class="fw-bold">Santri Aktif</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-card">
                                <div class="stat-number">50+</div>
                                <div class="fw-bold">Tenaga Pengajar</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-card">
                                <div class="stat-number">25+</div>
                                <div class="fw-bold">Tahun Berdiri</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stat-card">
                                <div class="stat-number">1000+</div>
                                <div class="fw-bold">Alumni</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Galeri Foto</h2>
                    <p class="text-muted">Dokumentasi kegiatan dan fasilitas Pondok Pesantren</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src=" {{asset('image.png')}} " class="d-block w-100" alt="Masjid Utama">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Masjid Utama</h5>
                                    <p>Tempat ibadah dan kegiatan keagamaan santri</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('image.png')}}" class="d-block w-100" alt="Ruang Kelas">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ruang Kelas</h5>
                                    <p>Fasilitas pembelajaran yang modern dan nyaman</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('image.png')}}" class="d-block w-100" alt="Asrama Santri">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Asrama Santri</h5>
                                    <p>Tempat tinggal yang nyaman dan aman untuk santri</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Sejarah Pondok Pesantren</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-5">
                            <h4 class="card-title text-success mb-4">Perjalanan Sejarah</h4>
                            <p class="card-text text-muted mb-4">
                                Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota didirikan pada tahun 1998 atas prakarsa para tokoh Muhammadiyah daerah yang memiliki visi untuk mendirikan lembaga pendidikan Islam yang berkualitas di wilayah Bangkinang.
                            </p>
                            <p class="card-text text-muted mb-4">
                                Berawal dari gedung sederhana dengan jumlah santri yang terbatas, kini pesantren telah berkembang menjadi salah satu lembaga pendidikan Islam terkemuka di Riau dengan fasilitas lengkap dan program pendidikan yang komprehensif.
                            </p>
                            <p class="card-text text-muted">
                                Sepanjang perjalanannya, pesantren telah berhasil mencetak ribuan alumni yang tersebar di berbagai profesi dan berkontribusi positif bagi masyarakat dan bangsa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organization Structure -->
    <section id="organization" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="organization-box">
                        <h5>Kyai/Mudir</h5>
                        <p class="mb-0">KH. Ahmad Syukri, M.Pd.I</p>
                        <small>Pimpinan Pondok Pesantren</small>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="organization-box">
                        <h5>Kepala Sekolah</h5>
                        <p class="mb-0">Drs. Muhammad Iqbal</p>
                        <small>Kepala Sekolah MA</small>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="organization-box">
                        <h5>Wakil Kepala Sekolah</h5>
                        <p class="mb-0">Ahmad Fauzi, S.Pd.I</p>
                        <small>Wakil Kepala Sekolah</small>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="organization-box">
                        <h5>Koordinator Asrama</h5>
                        <p class="mb-0">Ustadz Mahmud Rahman</p>
                        <small>Pembina Asrama Putra</small>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="organization-box">
                        <h5>Koordinator Asrama</h5>
                        <p class="mb-0">Ustadzah Siti Aisyah</p>
                        <small>Pembina Asrama Putri</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Berita Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Berita</span>
                            <h5 class="card-title">Prestasi Santri dalam Olimpiade Sains</h5>
                            <p class="card-text text-muted">Santri PP Muallimin berhasil meraih juara dalam Olimpiade Sains Nasional tingkat provinsi...</p>
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>15 Agustus 2024
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Pengumuman</span>
                            <h5 class="card-title">Penerimaan Santri Baru 2024/2025</h5>
                            <p class="card-text text-muted">Dibuka pendaftaran santri baru untuk tahun ajaran 2024/2025 dengan berbagai program unggulan...</p>
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>10 Agustus 2024
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Kegiatan</span>
                            <h5 class="card-title">Peringatan Hari Kemerdekaan RI</h5>
                            <p class="card-text text-muted">Seluruh santri mengikuti upacara bendera dalam rangka memperingati Hari Kemerdekaan RI ke-79...</p>
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>17 Agustus 2024
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Section -->
    <section id="academic" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Program Akademik</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header card-header-custom">
                            <h5 class="mb-0">
                                <i class="fas fa-book-open me-2"></i>Pendidikan Formal
                            </h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Madrasah Aliyah (MA)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Program IPA dan IPS</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kurikulum Nasional + Pesantren</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Persiapan PTN dan PTKIN</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header card-header-custom">
                            <h5 class="mb-0">
                                <i class="fas fa-mosque me-2"></i>Pendidikan Diniyah
                            </h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tahfidz Al-Qur'an</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kitab Kuning</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bahasa Arab dan Inggris</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kajian Kemuhammadiyahan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-success mb-3"></i>
                            <h5>Ekstrakurikuler</h5>
                            <p class="text-muted">Pramuka, PMR, Kaligrafi, Tilawah, Olahraga</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-laptop fa-3x text-success mb-3"></i>
                            <h5>Teknologi</h5>
                            <p class="text-muted">Lab Komputer, E-Learning, Internet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-certificate fa-3x text-success mb-3"></i>
                            <h5>Sertifikasi</h5>
                            <p class="text-muted">TOEFL, Tahfidz, Komputer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section id="articles" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Artikel & Opini</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Artikel</span>
                            <h5 class="card-title">Pentingnya Pendidikan Karakter di Pesantren</h5>
                            <p class="card-text text-muted">Mengapa pendidikan karakter menjadi fondasi utama dalam membentuk generasi yang berakhlak mulia...</p>
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>Ustadz Ahmad Fauzi
                                <i class="fas fa-calendar ms-2 me-1"></i>20 Juli 2024
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Opini</span>
                            <h5 class="card-title">Menyiapkan Santri Menghadapi Era Digital</h5>
                            <p class="card-text text-muted">Strategi pesantren dalam menyiapkan santri menghadapi tantangan dan peluang di era digital...</p>
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>Dr. Muhammad Iqbal
                                <i class="fas fa-calendar ms-2 me-1"></i>18 Juli 2024
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Tips</span>
                            <h5 class="card-title">Metode Efektif Menghafal Al-Qur'an</h5>
                            <p class="card-text text-muted">Tips dan trik dari para ustadz untuk membantu santri dalam program tahfidz Al-Qur'an...</p>
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>Ustadz Mahmud Rahman
                                <i class="fas fa-calendar ms-2 me-1"></i>15 Juli 2024
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section id="vision" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Visi & Misi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0">
                                <i class="fas fa-eye me-2"></i>VISI
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Menjadi pondok pesantren unggul yang mencetak generasi Muslim yang berakhlak mulia, cerdas intelektual dan spiritual, serta mampu berkontribusi dalam memajukan umat dan bangsa berdasarkan nilai-nilai Islam dan Kemuhammadiyahan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0">
                                <i class="fas fa-bullseye me-2"></i>MISI
                            </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Menyelenggarakan pendidikan Islam yang berkualitas dan berkarakter
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Mengembangkan potensi santri secara optimal dalam bidang akademik dan non-akademik
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Menanamkan nilai-nilai Islami dan kemuhammadiyahan dalam kehidupan sehari-hari
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Mempersiapkan santri menjadi pemimpin masa depan yang amanah
                                </li>
                                <li class="mb-0">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Memberikan pelayanan pendidikan terbaik kepada masyarakat
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Kontak Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x text-success mb-3"></i>
                            <h5>Alamat</h5>
                            <p class="text-muted">Jl. Pendidikan No. 123<br>Bangkinang Kota, Riau<br>Indonesia 28412</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-phone fa-3x text-success mb-3"></i>
                            <h5>Telepon</h5>
                            <p class="text-muted">
                                <strong>Kantor:</strong> (0762) 123-456<br>
                                <strong>WhatsApp:</strong> +62 812-3456-7890<br>
                                <strong>Fax:</strong> (0762) 123-457
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x text-success mb-3"></i>
                            <h5>Email</h5>
                            <p class="text-muted">
                                <strong>Umum:</strong> info@ppmuallimin.sch.id<br>
                                <strong>Akademik:</strong> akademik@ppmuallimin.sch.id<br>
                                <strong>Pendaftaran:</strong> psb@ppmuallimin.sch.id
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-warning mb-3">Pondok Pesantren Muallimin</h5>
                    <p class="mb-3">Lembaga pendidikan Islam yang berkomitmen mencetak generasi Muslim yang berakhlak mulia dan cerdas.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="text-warning mb-3">Menu Utama</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">Beranda</a></li>
                        <li class="mb-2"><a href="#about">Tentang</a></li>
                        <li class="mb-2"><a href="#gallery">Galeri</a></li>
                        <li class="mb-2"><a href="#history">Sejarah</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="text-warning mb-3">Informasi</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#organization">Organisasi</a></li>
                        <li class="mb-2"><a href="#news">Berita</a></li>
                        <li class="mb-2"><a href="#academic">Akademik</a></li>
                        <li class="mb-2"><a href="#vision">Visi Misi</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="text-warning mb-3">Kontak Informasi</h6>
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Jl. Pendidikan No. 123, Bangkinang Kota, Riau
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-phone me-2"></i>
                        (0762) 123-456
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        info@ppmuallimin.sch.id
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-clock me-2"></i>
                        Senin - Jumat: 07:00 - 16:00 WIB
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-0">&copy; 2024 Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p class="mb-0">Developed with <i class="fas fa-heart text-danger"></i> for Islamic Education</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="btn btn-success rounded-circle position-fixed" style="bottom: 20px; right: 20px; display: none; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Back to top button functionality
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.backgroundColor = 'white';
                navbar.style.backdropFilter = 'none';
            }
        });

        // Auto-rotate carousel
        const carousel = new bootstrap.Carousel(document.querySelector('#galleryCarousel'), {
            interval: 4000,
            wrap: true
        });

        // Add loading animation for cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards for animation
        document.querySelectorAll('.card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add interactive hover effects
        document.querySelectorAll('.news-card, .stat-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
                this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.08)';
            });
        });
    </script>
</body>
</html>