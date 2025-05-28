
@extends('layouts.app')

@section('title', 'PROGRAM SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')

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
<div id="myCustomCarousel" class="custom-slider">
    <div class="slider-content">
        <div class="slide-item active">
            <img class="slide-image" src="{{ asset('assets/images/T1.jpg') }}" alt="Birinci slayt">
        </div>
        <div class="slide-item">
            <img class="slide-image" src="{{ asset('assets/images/T1.jpg') }}" alt="Birinci slayt">
        </div>
        <div class="slide-item">
            <img class="slide-image" src="{{ asset('assets/images/T1.jpg') }}" alt="Birinci slayt">
        </div>
    </div>
    <a class="slide-control prev-slide" href="#myCustomCarousel" role="button">
        <span class="slide-arrow">❮</span>
    </a>
    <a class="slide-control next-slide" href="#myCustomCarousel" role="button">
        <span class="slide-arrow">❯</span>
    </a>
</div>

<style>
    .custom-slider {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 20px auto;
        overflow: hidden;
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

    .slide-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 2rem;
        text-decoration: none;
        background-color: rgba(0,0,0,0.5);
        padding: 10px 15px;
        border-radius: 50%;
        z-index: 10;
    }

    .prev-slide {
        left: 15px;
    }

    .next-slide {
        right: 15px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#myCustomCarousel');
        const items = carousel.querySelectorAll('.slide-item');
        const prevBtn = carousel.querySelector('.prev-slide');
        const nextBtn = carousel.querySelector('.next-slide');
        let currentIndex = 0;

        function showSlide(index) {
            items.forEach(item => item.classList.remove('active'));
            items[index].classList.add('active');
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

        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            prevSlide();
        });

        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            nextSlide();
        });

        // Otomatik geçiş (isteğe bağlı)
        setInterval(nextSlide, 5000);
    });
</script>






    @endsection
