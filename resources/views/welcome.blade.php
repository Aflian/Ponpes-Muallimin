<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota - Lembaga pendidikan Islam berkualitas yang mencetak generasi Muslim berakhlak mulia">
    <meta name="keywords" content="pesantren, muhammadiyah, bangkinang, pendidikan islam, santri">
    <meta name="author" content="PP Muallimin Muhammadiyah Bangkinang">

    <title>Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota</title>

    <!-- Preconnect to external domains for better performance -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <style>
        /* CSS Custom Properties */
        :root {
            --primary-green: #1b4332;
            --secondary-green: #2d5016;
            --light-green: #52b788;
            --accent-green: #74c69d;
            --soft-green: #95d5b2;
            --text-dark: #2c3e50;
            --text-muted: #6c757d;
            --border-color: #e9ecef;
            --shadow-light: 0 2px 10px rgba(0,0,0,0.08);
            --shadow-medium: 0 5px 20px rgba(0,0,0,0.12);
            --shadow-heavy: 0 10px 30px rgba(0,0,0,0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --border-radius: 16px;
            --border-radius-sm: 8px;
        }

        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Utility Classes */
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Navigation Styles */
        .navbar {
            padding: 1rem 0;
            transition: var(--transition);
            box-shadow: none;
            background: #ffff;
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            background: #ffff;
            box-shadow: var(--shadow-light);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--primary-green) !important;
            transition: var(--transition);
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            position: relative;
            transition: var(--transition);
            padding: 0.5rem 1rem !important;
        }

        .nav-link:hover {
            color: var(--primary-green) !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        /* Hero Section */
        .hero-section {
            background: url({{asset('image.png')}}) ;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.06)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(116,198,157,0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.1); opacity: 0.4; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-description {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            max-width: 600px;
        }

        /* Buttons */
        .btn-custom {
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--accent-green), var(--light-green));
            color: var(--primary-green);
            box-shadow: var(--shadow-medium);
        }

        .btn-primary-custom:hover {
            background: white;
            color: var(--primary-green);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        .btn-outline-custom {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-outline-custom:hover {
            background: white;
            color: var(--primary-green);
            transform: translateY(-3px);
        }

        /* Section Styles */
        .section-padding {
            padding: 6rem 0;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-green), var(--accent-green));
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Card Styles */
        .card-modern {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            overflow: hidden;
            background: white;
        }

        .card-modern:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-heavy);
        }

        .card-header-modern {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            font-weight: 600;
            border: none;
            padding: 1.5rem;
        }

        /* Statistics Cards */
        .stat-card {
            background: linear-gradient(135deg, var(--soft-green), var(--accent-green));
            border-radius: var(--border-radius);
            padding: 2.5rem;
            text-align: center;
            color: var(--primary-green);
            margin-bottom: 2rem;
            transition: var(--transition);
            border: 3px solid transparent;
        }

        .stat-card:hover {
            transform: translateY(-5px) scale(1.02);
            border-color: var(--primary-green);
            background: linear-gradient(135deg, var(--accent-green), var(--light-green));
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            opacity: 0.9;
        }

        /* Organization Cards */
        .organization-card {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            margin-bottom: 1.5rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .organization-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: var(--transition);
        }

        .organization-card:hover::before {
            left: 100%;
        }

        .organization-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
        }

        /* News Cards */
        .news-card {
            transition: var(--transition);
            border-radius: var(--border-radius);
            overflow: hidden;
            background: white;
            box-shadow: var(--shadow-light);
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .badge-modern {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Carousel Enhancements */
        .carousel-item img {
            height: 500px;
            object-fit: cover;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .carousel-caption {
            background: rgba(0,0,0,0.7);
            border-radius: var(--border-radius-sm);
            padding: 1rem 2rem;
            backdrop-filter: blur(10px);
        }

        .carousel-indicators button {
            background-color: var(--primary-green);
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--primary-green), #0d2818);
            color: white;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--accent-green), transparent);
        }

        .footer h5, .footer h6 {
            color: var(--accent-green);
            font-weight: 600;
        }

        .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer a:hover {
            color: var(--accent-green);
            transform: translateX(5px);
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin: 0 10px 10px 0;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--accent-green);
            transform: translateY(-3px) scale(1.1);
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            z-index: 1000;
            box-shadow: var(--shadow-medium);
            display: none;
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            background: linear-gradient(135deg, var(--secondary-green), var(--primary-green));
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-padding {
                padding: 4rem 0;
            }

            .hero-section {
                min-height: 80vh;
                text-align: center;
                padding: 2rem 0;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .btn-custom {
                padding: 12px 24px;
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }

            .section-title {
                font-size: 2.2rem;
            }
        }

        /* Loading Animation */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Improve accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Focus styles for better accessibility */
        .btn-custom:focus,
        .nav-link:focus,
        .back-to-top:focus {
            outline: 3px solid var(--accent-green);
            outline-offset: 2px;
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand" href="#home" aria-label="Pondok Pesantren Muallimin Muhammadiyah">
                <i class="fas fa-mosque me-2" aria-hidden="true"></i>
                PP Muallimin Muhammadiyah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="hero-title text-white mb-4">
                                Selamat Datang di<br>
                                <span class="text-warning">Pondok Pesantren</span><br>
                                Muallimin Muhammadiyah<br>
                                Bangkinang Kota
                            </h1>
                            <p class="hero-description text-white">
                                Membentuk generasi Muslim yang berakhlak mulia, cerdas, dan siap menghadapi tantangan zaman dengan berlandaskan nilai-nilai Islam dan kemuhammadiyahan.
                            </p>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#about" class="btn btn-primary-custom btn-custom">
                                    <i class="fas fa-info-circle me-2" aria-hidden="true"></i>Pelajari Lebih Lanjut
                                </a>
                                <a href="#academic" class="btn btn-outline-custom btn-custom">
                                    <i class="fas fa-graduation-cap me-2" aria-hidden="true"></i>Program Akademik
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="hero-image mt-5 mt-lg-0">
                            <i class="fas fa-mosque text-white" style="font-size: 15rem; opacity: 0.3;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Tentang Pondok Pesantren</h2>
                        <p class="section-subtitle">Lembaga pendidikan Islam yang berkomitmen menciptakan generasi unggul</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 fade-in-up">
                        <h3 class="text-gradient fw-bold mb-4 h2">Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota</h3>
                        <p class="text-muted mb-4 fs-5">
                            Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota adalah lembaga pendidikan Islam yang berkomitmen untuk menghasilkan lulusan yang tidak hanya unggul dalam bidang akademik, tetapi juga memiliki kepribadian yang Islami dan jiwa kepemimpinan yang kuat.
                        </p>
                        <p class="text-muted mb-4">
                            Dengan menggabungkan kurikulum pesantren tradisional dan pendidikan modern, kami berusaha menciptakan lingkungan belajar yang kondusif untuk pengembangan potensi santri secara optimal.
                        </p>
                    </div>
                    <div class="col-lg-6 fade-in-up">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="stat-card">
                                    <span class="stat-number">500+</span>
                                    <div class="stat-label">Santri Aktif</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stat-card">
                                    <span class="stat-number">50+</span>
                                    <div class="stat-label">Tenaga Pengajar</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stat-card">
                                    <span class="stat-number">25+</span>
                                    <div class="stat-label">Tahun Berdiri</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stat-card">
                                    <span class="stat-number">1000+</span>
                                    <div class="stat-label">Alumni</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Galeri Foto</h2>
                        <p class="section-subtitle">Dokumentasi kegiatan dan fasilitas Pondok Pesantren</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto fade-in-up">
                        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('image.png')}}" class="d-block w-100" alt="Masjid Utama Pondok Pesantren">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h4">Masjid Utama</h5>
                                        <p class="lead">Tempat ibadah dan kegiatan keagamaan santri</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('image.png')}}" class="d-block w-100" alt="Ruang Kelas Modern">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h4">Ruang Kelas</h5>
                                        <p class="lead">Fasilitas pembelajaran yang modern dan nyaman</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('image.png')}}" class="d-block w-100" alt="Asrama Santri">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="h4">Asrama Santri</h5>
                                        <p class="lead">Tempat tinggal yang nyaman dan aman untuk santri</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev" aria-label="Previous slide">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next" aria-label="Next slide">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section id="history" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Sejarah Pondok Pesantren</h2>
                        <p class="section-subtitle">Perjalanan panjang dalam mencerdaskan anak bangsa</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto fade-in-up">
                        <div class="card-modern">
                            <div class="card-body p-5">
                                <h3 class="card-title text-gradient mb-4">Perjalanan Sejarah</h3>
                                <p class="card-text text-muted mb-4 fs-5">
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
        <section id="organization" class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Struktur Organisasi</h2>
                        <p class="section-subtitle">Tim pengurus dan pengajar yang berpengalaman</p>
                    </div>
                </div>
                <div class="row fade-in-up">
                    <div class="col-lg-4 mb-4">
                        <div class="organization-card">
                            <h5 class="mb-3">Kyai/Mudir</h5>
                            <p class="mb-1 fw-bold">KH. Ahmad Syukri, M.Pd.I</p>
                            <small class="opacity-75">Pimpinan Pondok Pesantren</small>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="organization-card">
                            <h5 class="mb-3">Kepala Sekolah</h5>
                            <p class="mb-1 fw-bold">Drs. Muhammad Iqbal</p>
                            <small class="opacity-75">Kepala Sekolah MA</small>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="organization-card">
                            <h5 class="mb-3">Wakil Kepala Sekolah</h5>
                            <p class="mb-1 fw-bold">Ahmad Fauzi, S.Pd.I</p>
                            <small class="opacity-75">Wakil Kepala Sekolah</small>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="organization-card">
                            <h5 class="mb-3">Koordinator Asrama</h5>
                            <p class="mb-1 fw-bold">Ustadz Mahmud Rahman</p>
                            <small class="opacity-75">Pembina Asrama Putra</small>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="organization-card">
                            <h5 class="mb-3">Koordinator Asrama</h5>
                            <p class="mb-1 fw-bold">Ustadzah Siti Aisyah</p>
                            <small class="opacity-75">Pembina Asrama Putri</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section id="news" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Berita Terbaru</h2>
                        <p class="section-subtitle">Informasi terkini seputar kegiatan pesantren</p>
                    </div>
                </div>
                <div class="row fade-in-up">
                    <div class="col-lg-4 mb-4">
                        <article class="news-card card-modern h-100">
                            <div class="card-body p-4">
                                <span class="badge badge-modern bg-success mb-3">Berita</span>
                                <h5 class="card-title mb-3">Prestasi Santri dalam Olimpiade Sains</h5>
                                <p class="card-text text-muted mb-4">Santri PP Muallimin berhasil meraih juara dalam Olimpiade Sains Nasional tingkat provinsi...</p>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="fas fa-calendar me-2" aria-hidden="true"></i>15 Agustus 2024
                                </small>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <article class="news-card card-modern h-100">
                            <div class="card-body p-4">
                                <span class="badge badge-modern bg-info mb-3">Pengumuman</span>
                                <h5 class="card-title mb-3">Penerimaan Santri Baru 2024/2025</h5>
                                <p class="card-text text-muted mb-4">Dibuka pendaftaran santri baru untuk tahun ajaran 2024/2025 dengan berbagai program unggulan...</p>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="fas fa-calendar me-2" aria-hidden="true"></i>10 Agustus 2024
                                </small>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <article class="news-card card-modern h-100">
                            <div class="card-body p-4">
                                <span class="badge badge-modern bg-warning mb-3">Kegiatan</span>
                                <h5 class="card-title mb-3">Peringatan Hari Kemerdekaan RI</h5>
                                <p class="card-text text-muted mb-4">Seluruh santri mengikuti upacara bendera dalam rangka memperingati Hari Kemerdekaan RI ke-79...</p>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="fas fa-calendar me-2" aria-hidden="true"></i>17 Agustus 2024
                                </small>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Academic Section -->
        <section id="academic" class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Program Akademik</h2>
                        <p class="section-subtitle">Program pendidikan yang komprehensif dan berkualitas</p>
                    </div>
                </div>
                <div class="row fade-in-up">
                    <div class="col-lg-6 mb-4">
                        <div class="card-modern h-100">
                            <div class="card-header-modern">
                                <h5 class="mb-0">
                                    <i class="fas fa-book-open me-2" aria-hidden="true"></i>Pendidikan Formal
                                </h5>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Madrasah Aliyah (MA)</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Program IPA dan IPS</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Kurikulum Nasional + Pesantren</span>
                                    </li>
                                    <li class="mb-0 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Persiapan PTN dan PTKIN</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-modern h-100">
                            <div class="card-header-modern">
                                <h5 class="mb-0">
                                    <i class="fas fa-mosque me-2" aria-hidden="true"></i>Pendidikan Diniyah
                                </h5>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Tahfidz Al-Qur'an</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Kitab Kuning</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Bahasa Arab dan Inggris</span>
                                    </li>
                                    <li class="mb-0 d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-3" aria-hidden="true"></i>
                                        <span>Kajian Kemuhammadiyahan</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 fade-in-up">
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-users fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Ekstrakurikuler</h5>
                                <p class="card-text text-muted">Pramuka, PMR, Kaligrafi, Tilawah, Olahraga, dan berbagai kegiatan pengembangan bakat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-laptop fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Teknologi</h5>
                                <p class="card-text text-muted">Lab Komputer, E-Learning, Internet, dan fasilitas teknologi modern untuk pembelajaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-certificate fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Sertifikasi</h5>
                                <p class="card-text text-muted">TOEFL, Tahfidz, Komputer, dan berbagai sertifikasi keahlian lainnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Mission Section -->
        <section id="vision" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Visi & Misi</h2>
                        <p class="section-subtitle">Landasan filosofis dan arah pengembangan pesantren</p>
                    </div>
                </div>
                <div class="row fade-in-up">
                    <div class="col-lg-6 mb-4">
                        <div class="card-modern h-100">
                            <div class="card-header-modern">
                                <h4 class="mb-0">
                                    <i class="fas fa-eye me-2" aria-hidden="true"></i>VISI
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                <p class="card-text fs-5 lh-lg">
                                    Menjadi pondok pesantren unggul yang mencetak generasi Muslim yang berakhlak mulia, cerdas intelektual dan spiritual, serta mampu berkontribusi dalam memajukan umat dan bangsa berdasarkan nilai-nilai Islam dan Kemuhammadiyahan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card-modern h-100">
                            <div class="card-header-modern">
                                <h4 class="mb-0">
                                    <i class="fas fa-bullseye me-2" aria-hidden="true"></i>MISI
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled">
                                    <li class="mb-4 d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-3 mt-1" aria-hidden="true"></i>
                                        <span>Menyelenggarakan pendidikan Islam yang berkualitas dan berkarakter</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-3 mt-1" aria-hidden="true"></i>
                                        <span>Mengembangkan potensi santri secara optimal dalam bidang akademik dan non-akademik</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-3 mt-1" aria-hidden="true"></i>
                                        <span>Menanamkan nilai-nilai Islami dan kemuhammadiyahan dalam kehidupan sehari-hari</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-3 mt-1" aria-hidden="true"></i>
                                        <span>Mempersiapkan santri menjadi pemimpin masa depan yang amanah</span>
                                    </li>
                                    <li class="mb-0 d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-3 mt-1" aria-hidden="true"></i>
                                        <span>Memberikan pelayanan pendidikan terbaik kepada masyarakat</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section-padding bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title text-gradient">Kontak Kami</h2>
                        <p class="section-subtitle">Hubungi kami untuk informasi lebih lanjut</p>
                    </div>
                </div>
                <div class="row fade-in-up">
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-map-marker-alt fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Alamat</h5>
                                <address class="card-text text-muted mb-0">
                                    Jl. Pendidikan No. 123<br>
                                    Bangkinang Kota, Riau<br>
                                    Indonesia 28412
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-phone fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Telepon</h5>
                                <div class="card-text text-muted">
                                    <p class="mb-2"><strong>Kantor:</strong> <a href="tel:+6276123456" class="text-decoration-none">(0762) 123-456</a></p>
                                    <p class="mb-2"><strong>WhatsApp:</strong> <a href="https://wa.me/628123456789" class="text-decoration-none">+62 812-3456-7890</a></p>
                                    <p class="mb-0"><strong>Fax:</strong> (0762) 123-457</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card-modern text-center h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-envelope fa-3x text-success mb-4" aria-hidden="true"></i>
                                <h5 class="card-title mb-3">Email</h5>
                                <div class="card-text text-muted">
                                    <p class="mb-2"><strong>Umum:</strong> <a href="mailto:info@ppmuallimin.sch.id" class="text-decoration-none">info@ppmuallimin.sch.id</a></p>
                                    <p class="mb-2"><strong>Akademik:</strong> <a href="mailto:akademik@ppmuallimin.sch.id" class="text-decoration-none">akademik@ppmuallimin.sch.id</a></p>
                                    <p class="mb-0"><strong>Pendaftaran:</strong> <a href="mailto:psb@ppmuallimin.sch.id" class="text-decoration-none">psb@ppmuallimin.sch.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-warning mb-4">Pondok Pesantren Muallimin</h5>
                    <p class="mb-4 opacity-75">Lembaga pendidikan Islam yang berkomitmen mencetak generasi Muslim yang berakhlak mulia dan cerdas.</p>
                    <div class="social-links d-flex">
                        <a href="#" class="text-decoration-none me-2" aria-label="Facebook">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-2" aria-label="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-2" aria-label="YouTube">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
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
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1" aria-hidden="true"></i>
                        <span>Jl. Pendidikan No. 123, Bangkinang Kota, Riau</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone me-3" aria-hidden="true"></i>
                        <a href="tel:+6276123456" class="text-decoration-none">(0762) 123-456</a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope me-3" aria-hidden="true"></i>
                        <a href="mailto:info@ppmuallimin.sch.id" class="text-decoration-none">info@ppmuallimin.sch.id</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock me-3" aria-hidden="true"></i>
                        <span>Senin - Jumat: 07:00 - 16:00 WIB</span>
                    </div>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="mb-0 opacity-75">&copy; 2024 Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p class="mb-0 opacity-75">Developed with <i class="fas fa-heart text-danger" aria-hidden="true"></i> for Islamic Education</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        // Performance optimization: Use requestAnimationFrame for smooth animations
        const raf = requestAnimationFrame;

        // Utility functions
        const debounce = (func, wait) => {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        };

        const throttle = (func, limit) => {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            }
        };

        // Improved smooth scrolling with offset calculation
        const smoothScrollToElement = (target, offset = 80) => {
            const element = document.querySelector(target);
            if (!element) return;

            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        };

        // Enhanced navigation functionality
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                smoothScrollToElement(targetId);

                // Update URL without triggering scroll
                history.pushState(null, null, targetId);

                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // Enhanced back to top button
        const backToTopBtn = document.getElementById('backToTop');

        const toggleBackToTopBtn = throttle(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 300) {
                backToTopBtn.style.display = 'block';
                raf(() => {
                    backToTopBtn.style.opacity = '1';
                    backToTopBtn.style.transform = 'translateY(0)';
                });
            } else {
                raf(() => {
                    backToTopBtn.style.opacity = '0';
                    backToTopBtn.style.transform = 'translateY(20px)';
                });
                setTimeout(() => {
                    if (backToTopBtn.style.opacity === '0') {
                        backToTopBtn.style.display = 'none';
                    }
                }, 300);
            }
        }, 16);

        window.addEventListener('scroll', toggleBackToTopBtn);

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Enhanced navbar scroll behavior
        const navbar = document.querySelector('.navbar');

        const handleNavbarScroll = throttle(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }, 16);

        window.addEventListener('scroll', handleNavbarScroll);

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    raf(() => {
                        entry.target.classList.add('visible');
                    });
                    // Stop observing once animated
                    fadeInObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Apply fade-in animation to elements
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in-up');
            fadeElements.forEach(element => {
                fadeInObserver.observe(element);
            });
        });

        // Enhanced carousel with lazy loading
        const initializeCarousel = () => {
            const carousel = document.querySelector('#galleryCarousel');
            if (carousel) {
                new bootstrap.Carousel(carousel, {
                    interval: 6000,
                    wrap: true,
                    keyboard: true,
                    pause: 'hover'
                });
            }
        };

        // Interactive card effects with performance optimization
        const initializeCardEffects = () => {
            const cards = document.querySelectorAll('.news-card, .stat-card, .card-modern');

                            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    raf(() => {
                        this.style.transform = 'translateY(-8px)';
                        this.style.boxShadow = 'var(--shadow-heavy)';
                    });
                }, { passive: true });

                card.addEventListener('mouseleave', function() {
                    raf(() => {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = 'var(--shadow-light)';
                    });
                }, { passive: true });
            });
        };

        // Lazy loading for images
        const initializeLazyLoading = () => {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        };

        // Keyboard navigation support
        const initializeKeyboardNavigation = () => {
            document.addEventListener('keydown', (e) => {
                // ESC key to close mobile menu
                if (e.key === 'Escape') {
                    const navbarCollapse = document.querySelector('.navbar-collapse.show');
                    if (navbarCollapse) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                }

                // Arrow keys for carousel navigation
                if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                    const activeCarousel = document.querySelector('.carousel:hover');
                    if (activeCarousel) {
                        e.preventDefault();
                        const carousel = bootstrap.Carousel.getInstance(activeCarousel);
                        if (carousel) {
                            if (e.key === 'ArrowLeft') {
                                carousel.prev();
                            } else {
                                carousel.next();
                            }
                        }
                    }
                }
            });
        };

        // Error handling for external resources
        const handleImageError = (img) => {
            img.style.display = 'none';
            const placeholder = document.createElement('div');
            placeholder.className = 'bg-light d-flex align-items-center justify-content-center';
            placeholder.style.height = img.style.height || '400px';
            placeholder.innerHTML = '<i class="fas fa-image fa-3x text-muted"></i>';
            img.parentNode.insertBefore(placeholder, img);
        };

        // Initialize all functionality when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            initializeCarousel();
            initializeCardEffects();
            initializeLazyLoading();
            initializeKeyboardNavigation();

            // Handle image loading errors
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', () => handleImageError(img));
            });

            // Add loading states
            document.querySelectorAll('.btn-custom').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    if (this.href && this.href.startsWith('#')) return;

                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                    this.disabled = true;

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.disabled = false;
                    }, 2000);
                });
            });
        });

        // Performance monitoring
        window.addEventListener('load', () => {
            // Optional: Add performance monitoring
            if ('performance' in window) {
                const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
                console.log(`Page loaded in ${loadTime}ms`);
            }
        });

        // Service Worker registration for offline capability (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                // navigator.serviceWorker.register('/sw.js')
                //     .then(registration => console.log('SW registered: ', registration))
                //     .catch(registrationError => console.log('SW registration failed: ', registrationError));
            });
        }

        // Handle reduced motion preferences
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        if (prefersReducedMotion.matches) {
            document.documentElement.style.setProperty('--transition', 'none');
            document.querySelectorAll('.carousel').forEach(carousel => {
                carousel.setAttribute('data-bs-interval', 'false');
            });
        }

        // Add touch gesture support for mobile devices
        let touchStartX = 0;
        let touchEndX = 0;

        const handleGesture = () => {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                const carousel = document.querySelector('#galleryCarousel');
                const bsCarousel = bootstrap.Carousel.getInstance(carousel);

                if (bsCarousel) {
                    if (diff > 0) {
                        bsCarousel.next();
                    } else {
                        bsCarousel.prev();
                    }
                }
            }
        };

        document.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        document.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleGesture();
        }, { passive: true });

        // Print styles optimization
        window.addEventListener('beforeprint', () => {
            document.querySelectorAll('.carousel-item:not(.active)').forEach(item => {
                item.style.display = 'block';
                item.classList.add('active');
            });
        });

        window.addEventListener('afterprint', () => {
            location.reload(); // Simple solution to restore carousel state
        });

        // Analytics tracking (placeholder for Google Analytics or other services)
        const trackEvent = (action, category = 'User Interaction', label = '') => {
            // Example: gtag('event', action, { 'event_category': category, 'event_label': label });
            console.log(`Event tracked: ${category} - ${action} - ${label}`);
        };

        // Track navigation clicks
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                trackEvent('Navigation Click', 'Menu', e.target.textContent);
            });
        });

        // Track button clicks
        document.querySelectorAll('.btn-custom').forEach(btn => {
            btn.addEventListener('click', (e) => {
                trackEvent('Button Click', 'CTA', e.target.textContent);
            });
        });
    </script>
</body>
</html>