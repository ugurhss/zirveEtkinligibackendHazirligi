
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
        <button class="content-toggle">İçerik</button>
        <div class="content" style="display: none;">
            <p>Burada açılış konuşmalarının detayları yer alacak.</p>
            <ul>
                <li>Konuşmacı: Prof. Dr. Ahmet Yılmaz</li>
                <li>Konu: Dijital Dönüşüm ve Gelecek</li>
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
            <p>Kamu-akademi işbirliği üzerine tartışmalar.</p>
            <ul>
                <li>Moderatör: Dr. Ayşe Kaya</li>
                <li>Katılımcılar: TÜBİTAK, İstanbul Üniversitesi</li>
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
            <p>Kamu-akademi işbirliği üzerine tartışmalar.</p>
            <ul>
                <li>Moderatör: Dr. Ayşe Kaya</li>
                <li>Katılımcılar: TÜBİTAK, İstanbul Üniversitesi</li>
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
            <p>Kamu-akademi işbirliği üzerine tartışmalar.</p>
            <ul>
                <li>Moderatör: Dr. Ayşe Kaya</li>
                <li>Katılımcılar: TÜBİTAK, İstanbul Üniversitesi</li>
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
            <img src="{{ asset('assets/images/T1.jpg') }}" class="d-block w-100" alt="First slide">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Başlık 1</h5>
                <p>Açıklama metni</p>
            </div> --}}
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/T2.jpg') }}" class="d-block w-100" alt="First slide">
            {{-- <div class="carousel-caption d-none d-md-block">
                <h5>Başlık 2</h5>
                <p>Açıklama metni</p>
            </div> --}}
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/T3.jpg') }}" class="d-block w-100" alt="First slide">
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
</div> <br>
    @endsection

