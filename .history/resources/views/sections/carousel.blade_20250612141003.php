<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/program-banner-1.jpg') }}" class="d-block w-100" alt="First slide">
        <button class="centered-program-button">PROGRAM DETAYLARI</button>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-2.jpg') }}" class="d-block w-100" alt="First slide">
        <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-3.jpg') }}" class="d-block w-100" alt="First slide">
          <div class="carousel-caption d-none d-md-block">

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
    /* CSS */
.centered-program-button {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px 35px;
        background: rgba(255, 255, 255, 0.1); /* Şeffaf arka plan */
    color: white;
    border: 2px solid white;
    border-radius: 50px;
    font-size: 1.2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    z-index: 10;
            backdrop-filter: blur(6px); /* Arka planın flu görünmesini sağlar */

}

.centered-program-button:hover {
    background: linear-gradient(135deg, #004d99, #0066cc);
    transform: translate(-50%, -50%) scale(1.08);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
}

/* Mobil uyumluluk için */
@media (max-width: 768px) {
    .centered-program-button {
        padding: 10px 25px;
        font-size: 1rem;
    }
}
</style>
