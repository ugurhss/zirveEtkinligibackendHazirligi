
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
<div class="resim-carousel" style="margin-top: 50px; margin-bottom: 50px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/images/T1.jpg') }} alt="First slide">

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/images/t2.jpg') }} alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/images/t3.jpg') }} alt="First slide">
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Bootstrap Carousel'i başlat
        const carouselElement = document.querySelector('#carouselExampleIndicators');

        if (carouselElement) {
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 3000, // 3 saniyede bir slayt değiştir
                ride: 'carousel',
                pause: 'hover', // Üzerine gelince durdur
                wrap: true      // Sonsuz döngü
            });
        }
    });
</script>





    @endsection

