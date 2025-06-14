<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 0;">
    <!-- Carousel göstergeleri -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Carousel içeriği -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/t2.jpg') }}" class="d-block w-100" alt="First slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025</h5>
                <p class="fs-6 fs-md-5 mb-3 mb-md-4">DİJİTALE DEĞER ODAKLI YAKLAŞIM<br>12 KASIM 2025 ÇARŞAMBA</p>
                <div>
                    <a href="{{ route('program') }}" class="custom-btn btn-transparent">PROGRAM DETAYLARI</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t1.jpg') }}" class="d-block w-100" alt="Second slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">Dijital Çağda Ekonomi Sanayi ve Medya Nasıl Dönüşüyor?</h5>
                <p class="fs-6 fs-md-5 mb-3 mb-md-4">Sürdürülebilirlik odaklı yenilikçi çözümleri<br>keşfetmek için SİZ'25'te buluşuyoruz!</p>
                <div>
                    <a href="{{ route('peak') }}" class="custom-btn btn-transparent">ZİRVE DETAYLARI</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t.jpg') }}" class="d-block w-100" alt="Third slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">Ana Sponsorlar<br>Medya Partnerleri<br>Destekleyen Kurumlar</h5>
                <div>
                    <a href="{{ route('sponsor') }}" class="custom-btn btn-transparent">SPONSORLUK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel kontrolleri -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<style>
    /* Özel buton stilleri */
    .custom-btn {
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        border: 2px solid white;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    /* Şeffaf buton stili */
    .btn-transparent {
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }

    /* Hover efekti - Mor RGB (128, 0, 128) */
    .btn-transparent:hover {
        background-color: rgba(128, 0, 128, 0.7);
        border-color: rgba(128, 0, 128, 0.9);
    }

    /* Responsive ayarlar */
    @media (max-width: 768px) {
        .carousel-caption {
            padding: 0.5rem !important;
        }
        .display-6 {
            font-size: 1.25rem !important;
        }
        .fs-6 {
            font-size: 0.9rem !important;
        }
        .custom-btn {
            padding: 0.4rem 1.2rem !important;
            font-size: 0.9rem !important;
        }
    }

    @media (min-width: 768px) {
        .custom-btn {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
        }
    }
</style>
