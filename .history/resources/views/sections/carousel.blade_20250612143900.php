<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/program-banner-1.jpg') }}" class="d-block w-100" alt="First slide">
        <button class="centered-program-button1">PROGRAM DETAYLARI</button>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-2.jpg') }}" class="d-block w-100" alt="First slide">
                <button class="centered-program-button1">ZİRVE DETAYLARI</button>

        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-3.jpg') }}" class="d-block w-100" alt="First slide">
                  <button class="centered-program-button1">SPONSORLUK</button>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

