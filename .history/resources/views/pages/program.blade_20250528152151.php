
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
  <ol class="slider-indicators">
    <li data-target="#myCustomCarousel" data-slide-number="0" class="active"></li>
    <li data-target="#myCustomCarousel" data-slide-number="1"></li>
    <li data-target="#myCustomCarousel" data-slide-number="2"></li>
  </ol>
  <div class="slider-content">
    <div class="slide-item active">
      <img class="slide-image" src="resim1.jpg" alt="Birinci slayt">
    </div>
    <div class="slide-item">
      <img class="slide-image" src="resim2.jpg" alt="İkinci slayt">
    </div>
    <div class="slide-item">
      <img class="slide-image" src="resim3.jpg" alt="Üçüncü slayt">
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






    @endsection
