<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 0;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/t2.jpg') }}" class="d-block w-100" alt="First slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025</h5>
                <p class="fs-6 fs-md-5 mb-3 mb-md-4">DİJİTALE DEĞER ODAKLI YAKLAŞIM<br>12 KASIM 2025 ÇARŞAMBA</p>
                <div>
                    <a href="{{ route('program') }}" class="btn btn-primary btn-sm btn-md-lg px-3 px-md-4">PROGRAM DETAYLARI</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t1.jpg') }}" class="d-block w-100" alt="Second slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">Dijital Çağda Ekonomi Sanayi ve Medya Nasıl Dönüşüyor?</h5>
                <p class="fs-6 fs-md-5 mb-3 mb-md-4">Sürdürülebilirlik odaklı yenilikçi çözümleri<br>keşfetmek için SİZ'25'te buluşuyoruz!</p>
                <div>
                    <a href="{{ route('peak') }}" class="btn btn-primary btn-sm btn-md-lg px-3 px-md-4">ZİRVE DETAYLARI</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t.jpg') }}" class="d-block w-100" alt="Third slide" style="object-fit: cover; min-height: 70vh;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0; background: transparent !important; padding: 1rem;">
                <h5 class="display-6 display-md-5 fw-bold mb-2 mb-md-3">Ana Sponsorlar<br>Medya Partnerleri<br>Destekleyen Kurumlar</h5>
                <div>
                    <a href="{{ route('sponsor') }}" class="btn btn-primary btn-sm btn-md-lg px-3 px-md-4">SPONSORLUK</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<style>
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
        .btn-sm {
            padding: 0.25rem 0.5rem !important;
            font-size: 0.8rem !important;
        }
    }

    /* Butonlar için özel responsive class */
    .btn-md-lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }

    @media (min-width: 768px) {
        .btn-md-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
        }
    }
</style>
