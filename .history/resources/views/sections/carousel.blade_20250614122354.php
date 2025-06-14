<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/t2.jpg') }}" class="d-block w-100" alt="First slide">
            <div class="carousel-caption d-flex flex-column align-items-start justify-content-center h-100 px-5 pb-5 text-white">
                <h3 class="display-5 fw-bold">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025</h3>
                <p class="lead mt-3">DİJİTALE DEĞER ODAKLI YAKLAŞIM<br>12 KASIM 2025 ÇARŞAMBA</p>
                <a href="{{ route('program') }}" class="btn btn-light btn-lg mt-4 shadow-sm rounded-pill">PROGRAM DETAYLARI</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t1.jpg') }}" class="d-block w-100" alt="Second slide">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 px-5 pb-5 text-white text-center">
                <h3 class="display-6 fw-bold">Dijital Çağda Ekonomi Sanayi ve Medya Nasıl Dönüşüyor?</h3>
                <p class="lead mt-3">Sürdürülebilirlik odaklı yenilikçi çözümleri keşfetmek için SİZ’25’te buluşuyoruz!</p>
                <a href="{{ route('peak') }}" class="btn btn-outline-light btn-lg mt-4 rounded-pill">ZİRVE DETAYLARI</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t.jpg') }}" class="d-block w-100" alt="Third slide">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 px-5 pb-5 text-white text-center">
                <h3 class="display-6 fw-bold">Ana Sponsorlar | Medya Partnerleri | Destekleyen Kurumlar</h3>
                <a href="{{ route('sponsor') }}" class="btn btn-primary btn-lg mt-4 rounded-pill shadow">SPONSORLUK</a>
            </div>
        </div>

    </div>

    <!-- Kontrol Okları -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<style>
    .carousel {
    margin-bottom: 0;
}

    .carousel-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 3rem;
    background: rgba(0, 0, 0, 0.4); /* Arka plan saydamlığı */
    text-align: left;
}

.carousel-item img {
    object-fit: cover;
    height: 80vh;
}

.carousel-item h3 {
    text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
}

.carousel-item p {
    text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
}

.btn-rounded {
    border-radius: 50px;
}

@media (max-width: 768px) {
    .carousel-caption {
        padding: 2rem;
        font-size: 0.9rem;
    }

    .carousel-item h3 {
        font-size: 1.5rem;
    }
}
</style>
