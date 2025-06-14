
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
          <img src="{{ asset('assets/images/logo.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>


<div class="program-container">
    <h2>Program</h2>
    <h3>14 May Çar</h3>
    <p>Sürdürülebilirlik ve İnsan Zirvesi 2025 | Bursa | Kasım 2025
</p>

    <div class="event">


        <span class="duration">1 saat</span>
        <h4>Açılış Konuşmaları</h4>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Açılış Konuşmaları</p>
            <ul>
                {{-- <li>Açılış Konusması </li> --}}

            </ul>
        </div>
    </div>

    <div class="event">
        <time>11:00 - 12:00</time>
        <span class="duration">1 saat</span>
        <h4>Panel 1: Kamu ve Akademi</h4>
        <p>Ana Sahne</p>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Dijital Dünya'da Ekonomi Politikları Nasıl Olmalı ?</p>
            <ul>
                {{-- <li>Moderatör:</li>
                <li>Katılımcılar: TÜBİTAK,  Üniversitesi</li> --}}
            </ul>
        </div>
    </div>



      <div class="event">
        <time>12:30 - 13:30</time>
        <span class="duration">1 saat</span>
        <h4>Öğle Yemeği</h4>
        <p>Yemekhane</p>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Yemekhane</p>
            <ul>
                {{-- <li>Moderatör: /li>
                <li>Katılımcılar: TÜBİTAK,  Üniversitesi</li> --}}
            </ul>
        </div>
    </div>


      <div class="event">
        <time>13:30 - 14:30</time>
        <span class="duration">1 saat</span>
        <h4>Panel 2 : Sanayi ve İstihdam</h4>
        <p>Ana Sahne</p>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Dijital Ekonomide Sürdürülebilir Rekabet Stratejileri

</p>
            <ul>
                {{-- <li>Moderatör:</li>
                <li>Katılımcılar: TÜBİTAK,  Üniversitesi</li> --}}
            </ul>
        </div>
    </div>

  <div class="event">
        <time>14:30 - 15:00</time>
        <span class="duration">30 dakika</span>
        <h4>Ara</h4>
        <p>Ana Sahne</p>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Yemekhane</p>
            <ul>
                {{-- <li>Moderatör: /li>
                <li>Katılımcılar: TÜBİTAK,  Üniversitesi</li> --}}
            </ul>
        </div>
    </div>



  <div class="event">
        <time>15:00 - 16:00</time>
        <span class="duration">1 saat</span>
        <h4>Panel 3 : Politika ve Medya
</h4>
        <p>Ana Sahne</p>
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Dijital Ekonomide Toplumsal Beklentiler ve Gençlik

</p>
            <ul>
                {{-- <li>Moderatör: /li>
                <li>Katılımcılar: TÜBİTAK,  Üniversitesi</li> --}}
            </ul>
        </div>
    </div>

</div>

<!-- Carousel Section -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/program-banner-1.jpg') }}" class="d-block w-100" alt="First slide">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Başlık 1</h5>
                <p>Açıklama metni</p>
            </div> --}}
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-2.jpg') }}" class="d-block w-100" alt="First slide">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Başlık 2</h5>
                <p>Açıklama metni</p>
            </div> --}}
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/program-banner-3.jpg') }}" class="d-block w-100" alt="First slide">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Başlık 3</h5>
                <p>Açıklama metni</p>
            </div> --}}
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
    <style>
    #mainCarousel {
        max-width: 800px; /* İstediğiniz genişlik */
        margin: auto;
    }
/*
    .carousel-inner {
        height: 400px; /* İstediğiniz yükseklik */
        /* border-radius: 10px;
        overflow: hidden; */
    } */

    /* .carousel-item img {
        height: 100%;
        object-fit: cover;
        width: 100%;
        object-position: center;
    } */

    @media (max-width: 768px) {
        .carousel-inner {
            height: 250px;
        }
    }
</style>
</style>
    @endsection

