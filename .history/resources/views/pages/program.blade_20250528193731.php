
<section class="zirve-banner" style="margin-bottom: -10px;">
        <div class="zirve-content-wrapper">
            <!-- Başlık -->
            <h1 class="zirve-baslik">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ</h1>
            <h2 class="zirve-altbaslik">2025 | BURSA</h2>

            <!-- Açıklama Metinleri -->
            <div class="zirve-aciklama">
                <p style="text-align: center;">
                   ZİRVE TEMASI : DİJİTAL EKONOMİ
 </P>
            </div>

            <!-- Logo -->
           <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/SIZ LOGO 2.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>


    <div class="program-container">
        <h2>Program</h2>
        <h3>14 May Çar</h3>
        <div class="event">
            <time>10:00 - 11:00</time>
            <span class="duration">1 saat</span>
            <h4>Açılış Konuşmaları</h4>
        </div>
        <div class="event">
            <time>11:00 - 12:00</time>
            <span class="duration">1 saat</span>
            <h4>Panel 1: Kamu ve Akademi</h4>
            <p>Ana Sahne</p>
        </div>
        <div class="event">
            <time>12:30 - 13:30</time>
            <span class="duration">1 saat</span>
            <h4>Öğle Yemeği</h4>
            <p>Yemekhane</p>
        </div>
        <div class="event">
            <time>13:30 - 14:30</time>
            <span class="duration">1 saat</span>
            <h4>Panel 2: Sanayi ve İstihdam</h4>
            <p>Ana Sahne</p>
        </div>
        <div class="event">
            <time>14:30 - 15:00</time>
            <span class="duration">30 dakika</span>
            <h4>Ara</h4>
        </div>
        <div class="event">
            <time>15:00 - 16:00</time>
            <span class="duration">1 saat</span>
            <h4>Panel 3: Politika ve Medya</h4>
            <p>Ana Sahne</p>
        </div>
    </div>
<div id="fullpage-carousel" class="fullpage-carousel">
    <!-- Slide 1 -->
    <div class="carousel-slide active" style="background-image: url('{{ asset('assets/images/slide1.jpg') }}');">
        <div class="slide-content">
            <div class="panel-label">PANEL 1</div>
            <h2 class="panel-title">KAMU VE AKADEMİ</h2>
            <p class="panel-question">Dijital Dünya'da Ekonomi Politikaları Nasıl Olmalı?</p>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/slide2.jpg') }}');">
        <div class="slide-content">
            <div class="panel-label">PANEL 2</div>
            <h2 class="panel-title">SANAYİ VE İSTİHDAM</h2>
            <p class="panel-question">Dijital Dönüşüm İstihdamı Nasıl Etkiliyor?</p>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/slide3.jpg') }}');">
        <div class="slide-content">
            <div class="panel-label">PANEL 3</div>
            <h2 class="panel-title">POLİTİKA VE MEDYA</h2>
            <p class="panel-question">Dijital Ekonomiye Medya Nasıl Bakıyor?</p>
        </div>
    </div>

    <button class="carousel-nav prev-btn">❮</button>
    <button class="carousel-nav next-btn">❯</button>
</div>

<style>
    /* Temel stil sıfırlama */
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        font-family: Arial, sans-serif;
    }

    /* Carousel konteyner */
    .fullpage-carousel {
        position: relative;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
    }

    /* Her bir slide */
    .carousel-slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: none;
    }

    .carousel-slide.active {
        display: block;
    }

    /* İçerik stil */
    .slide-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        width: 90%;
        max-width: 800px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    .panel-label {
        font-size: 1.5rem;
        font-weight: bold;
        letter-spacing: 3px;
        margin-bottom: 10px;
        color: #fff;
    }

    .panel-title {
        font-size: 3rem;
        margin: 0 0 20px 0;
        font-weight: bold;
        color: #fff;
    }

    .panel-question {
        font-size: 1.8rem;
        line-height: 1.4;
        margin: 0;
        color: #fff;
    }

    /* Navigasyon butonları */
    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: white;
        border: none;
        font-size: 2.5rem;
        padding: 15px 20px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .carousel-nav:hover {
        background: rgba(0,0,0,0.8);
    }

    .prev-btn {
        left: 30px;
    }

    .next-btn {
        right: 30px;
    }

    /* Mobil uyumluluk */
    @media (max-width: 768px) {
        .panel-label {
            font-size: 1.2rem;
        }

        .panel-title {
            font-size: 2rem;
        }

        .panel-question {
            font-size: 1.4rem;
        }

        .carousel-nav {
            font-size: 2rem;
            padding: 10px 15px;
        }

        .prev-btn {
            left: 15px;
        }

        .next-btn {
            right: 15px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('fullpage-carousel');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let currentIndex = 0;
        let autoSlideInterval;

        // Slaytları göster
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
            currentIndex = index;
        }

        // Sonraki slayt
        function nextSlide() {
            let newIndex = (currentIndex + 1) % slides.length;
            showSlide(newIndex);
        }

        // Önceki slayt
        function prevSlide() {
            let newIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(newIndex);
        }

        // Otomatik geçişi başlat
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        // Otomatik geçişi sıfırla
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        // Buton eventleri
        prevBtn.addEventListener('click', () => {
            resetAutoSlide();
            prevSlide();
        });

        nextBtn.addEventListener('click', () => {
            resetAutoSlide();
            nextSlide();
        });

        // Fareyle etkileşim
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        carousel.addEventListener('mouseleave', startAutoSlide);

        // Başlangıçta ilk slaytı göster ve otomatik geçişi başlat
        showSlide(0);
        startAutoSlide();
    });
</script>
