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