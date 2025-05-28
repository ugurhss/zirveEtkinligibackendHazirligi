@extends('layouts.app')

@section('title', 'PROGRAM SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ 2025 | BURSA')

@section('content')

<style>
    /* Zirve Banner Stilleri */
    .zirve-banner {
        background-color: #f8f9fa;
        padding: 40px 0;
        text-align: center;
        margin-bottom: -10px;
    }

    .zirve-content-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .zirve-baslik {
        color: #2c3e50;
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .zirve-altbaslik {
        color: #3498db;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .zirve-aciklama {
        font-size: 1.2rem;
        color: #7f8c8d;
        margin-bottom: 30px;
    }

    .zirve-logo-alani {
        margin-top: 30px;
    }

    .zirve-logo {
        max-width: 200px;
        height: auto;
    }

    /* Program Container Stilleri */
    .program-container {
        border-radius: 3px;
        box-shadow: 0 4px 20px rgba(106, 104, 104, 0.2);
        padding: 30px;
        width: 90%;
        max-width: 600px;
        margin: 40px auto;
        text-align: center;
        background-color: white;
    }

    .program-container h2 {
        color: #007BFF;
        margin-bottom: 20px;
    }

    .program-container h3 {
        color: #495057;
        margin-bottom: 15px;
    }

    .event {
        border-bottom: 1px solid #dee2e6;
        padding: 10px 0;
        text-align: left;
    }

    .event:last-child {
        border-bottom: none;
    }

    .event time {
        font-weight: bold;
        color: #28a745;
    }

    .event .duration {
        display: block;
        font-size: 0.9em;
        color: #6c757d;
    }

    .event h4 {
        margin: 5px 0;
        color: #212529;
    }

    .event p {
        color: #6c757d;
        font-size: 0.9em;
        margin-top: 5px;
    }

    /* Carousel Stilleri */
    .custom-slider {
        position: relative;
        width: 90%;
        max-width: 800px;
        margin: 40px auto;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .slider-content {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide-item {
        min-width: 100%;
        display: none;
    }

    .slide-item.active {
        display: block;
    }

    .slide-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .slider-indicators {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .slider-indicators li {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .slider-indicators li.active {
        background-color: white;
    }

    .slide-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 2rem;
        text-decoration: none;
        opacity: 0.7;
        z-index: 10;
        transition: opacity 0.3s;
        background-color: rgba(0,0,0,0.3);
        padding: 10px 15px;
        border-radius: 50%;
    }

    .slide-control:hover {
        opacity: 1;
    }

    .prev-slide {
        left: 15px;
    }

    .next-slide {
        right: 15px;
    }

    .visually-hidden {
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

    /* Medya sorguları */
    @media (max-width: 768px) {
        .zirve-baslik {
            font-size: 2rem;
        }

        .zirve-altbaslik {
            font-size: 1.5rem;
        }

        .program-container {
            padding: 20px;
        }

        .program-container h2 {
            font-size: 1.5em;
        }

        .program-container h3 {
            font-size: 1.2em;
        }

        .event {
            padding: 8px 0;
        }

        .event time {
            font-size: 1em;
        }

        .event .duration {
            font-size: 0.8em;
        }

        .event h4 {
            font-size: 1em;
        }

        .custom-slider {
            width: 95%;
        }
    }
</style>

<section class="zirve-banner">
    <div class="zirve-content-wrapper">
        <h1 class="zirve-baslik">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ</h1>
        <h2 class="zirve-altbaslik">2025 | BURSA</h2>

        <div class="zirve-aciklama">
            <p style="text-align: center;">ZİRVE TEMASI : DİJİTAL EKONOMİ</p>
        </div>

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

<div id="myCustomCarousel" class="custom-slider">
    <ol class="slider-indicators">
        <li data-target="#myCustomCarousel" data-slide-number="0" class="active"></li>
        <li data-target="#myCustomCarousel" data-slide-number="1"></li>
        <li data-target="#myCustomCarousel" data-slide-number="2"></li>
    </ol>
    <div class="slider-content">
        <div class="slide-item active">
            <img class="slide-image" src="{{ asset('assets/images/slide1.jpg') }}" alt="Birinci slayt">
        </div>
        <div class="slide-item">
            <img class="slide-image" src="{{ asset('assets/images/slide2.jpg') }}" alt="İkinci slayt">
        </div>
        <div class="slide-item">
            <img class="slide-image" src="{{ asset('assets/images/slide3.jpg') }}" alt="Üçüncü slayt">
        </div>
    </div>
    <a class="slide-control prev-slide" href="#myCustomCarousel" role="button" data-slide-direction="prev">
        <span class="slide-arrow prev-arrow" aria-hidden="true">❮</span>
        <span class="visually-hidden">Önceki</span>
    </a>
    <a class="slide-control next-slide" href="#myCustomCarousel" role="button" data-slide-direction="next">
        <span class="slide-arrow next-arrow" aria-hidden="true">❯</span>
        <span class="visually-hidden">Sonraki</span>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#myCustomCarousel');
        const items = carousel.querySelectorAll('.slide-item');
        const indicators = carousel.querySelectorAll('.slider-indicators li');
        const prevBtn = carousel.querySelector('.prev-slide');
        const nextBtn = carousel.querySelector('.next-slide');
        let currentIndex = 0;
        let autoSlideInterval;

        function showSlide(index) {
            // Tüm slaytları gizle
            items.forEach(item => item.classList.remove('active'));
            // Tüm göstergeleri pasif yap
            indicators.forEach(indicator => indicator.classList.remove('active'));

            // Yeni slaytı göster
            items[index].classList.add('active');
            indicators[index].classList.add('active');
            currentIndex = index;
        }

        function nextSlide() {
            let newIndex = (currentIndex + 1) % items.length;
            showSlide(newIndex);
        }

        function prevSlide() {
            let newIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(newIndex);
        }

        // Göstergelere tıklama olayı
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                resetAutoSlide();
                showSlide(index);
            });
        });

        // Önceki/Sonraki butonları
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            resetAutoSlide();
            prevSlide();
        });

        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            resetAutoSlide();
            nextSlide();
        });

        // Otomatik geçiş fonksiyonu
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        // Fare carousel üzerindeyken otomatik geçişi durdur
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        // Fare carousel'den ayrılınca otomatik geçişi başlat
        carousel.addEventListener('mouseleave', startAutoSlide);

        // Başlangıçta otomatik geçişi başlat
        startAutoSlide();
    });
</script>

@endsection
