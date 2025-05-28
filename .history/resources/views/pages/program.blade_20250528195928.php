
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

<!-- Carousel Section -->

<!-- Carousel Section -->
<div class="carousel-container">
    <div class="carousel-track" id="carouselTrack">
        <div class="carousel-item">
            <img src="{{ asset('assets/images/T1.jpg') }}" alt="Konuşmacı 1">
            <p>Dr. Ayşe Yılmaz</p>
            <span>Akıllı Şehirler ve Dijitalleşme</span>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t2.jpg') }}" alt="Konuşmacı 2">
            <p>Mehmet Demir</p>
            <span>Sanayide Dijital Dönüşüm</span>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/t3.jpg') }}" alt="Konuşmacı 3">
            <p>Zeynep Kaya</p>
            <span>İnsan Kaynaklarında Yapay Zeka</span>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/speaker4.jpg') }}" alt="Konuşmacı 4">
            <p>Ali Vural</p>
            <span>Dijital Ekonomi ve Gelecek</span>
        </div>
    </div>

    <!-- Navigasyon Butonları -->
    <button class="carousel-btn prev" onclick="moveCarousel(-1)">❮</button>
    <button class="carousel-btn next" onclick="moveCarousel(1)">❯</button>
</div>



<script>
    const track = document.getElementById('carouselTrack');
    let index = 0;

    function moveCarousel(direction) {
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        index = (index + direction + totalItems) % totalItems;

        const itemWidth = items[0].offsetWidth + 20; // gap dahil
        track.style.transform = `translateX(-${index * itemWidth}px)`;
    }
</script>



    {{-- @endsection --}}

