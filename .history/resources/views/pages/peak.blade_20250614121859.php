@extends('layouts.app')

@section('title', 'ZİRVE SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA')

@section('content')
 <section class="zirve-banner" style="margin-bottom: -10px;">
        <div class="zirve-content-wrapper">
            <!-- Başlık -->
            <h1 class="zirve-baslik">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ</h1>
            <h2 class="zirve-altbaslik">2025 | BURSA</h2>

            <!-- Açıklama Metinleri -->
            <div class="zirve-aciklama">
                <p>
                    Sürdürülebilirlik ve İnsan Zirvesi 2025 (SİZ'25), Birlik Vakfı Bursa Şubesi'nin koordinasyonu ve Uludağ Üniversitesi ev sahipliğinde 12 Kasım 2025 Çarşamba günü düzenlenecektir.
                </p>
                <p>
                    Dijital Dünya’nın getirdiği hızlı değişim ve kaynaklarımızın hızla tüketilmesine karşı, sürdürülebilirlik teması ön planda çıkarılan etkinlikte amaç, gündeme getirilen konularda sürdürülebilirlik kavramının yenilikçi yaklaşımlarla konuşulmasına imkan sağlamaktır.
                </p>
                <p>
                    Bununla birlikte “İnsan” vurgusu ile insani değerler olan adil ve ahlak gibi kavramların dijital dünyada önceliklendirilmesi amaçlanmaktadır.
                </p>
                <p>
                    Bu amaçlar doğrultusunda düzenlenecek Sürdürülebilirlik ve İnsan Zirvesi’nin bu seneki temasının “Dijital Ekonomi” olmasına karar verilmiştir. Açılış konuşmaları ve 3 panel şeklinde organize edilmesi planlanan etkinliğin, katılımcıları ve gündeme getireceği başlıklarla ulusal düzeyde ses getirecek bir etkinlik olacağı düşünülmektedir.
                <br><br></p>
            </div>

            <!-- Logo -->
           {{-- <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/sizlogo.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div> --}}
        </div>
    </section>


<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Slayt göstergeleri -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slayt içeriği -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/zirve-hakkinda-banner-1.jpg') }}" class="d-block w-100" alt="Slayt 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/zirve-hakkinda-banner-2.jpg') }}" class="d-block w-100" alt="Slayt 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/zirve-hakkinda-banner-3.jpg') }}" class="d-block w-100" alt="Slayt 3">
        </div>
    </div>

    <!-- Önceki/Sonraki butonlar -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<style>

    #mainCarousel {
         height: 420px;
        width: 100%;
        overflow: hidden; /* Taşan  kes */
        position: relative; /* iç için referans oluştur */
    }

    /* MOBİL İÇİN (Yatay modda) */
    @media (max-width: 768px) and (orientation: portrait) {
        #mainCarousel {
            height: 60vw !important;
            min-height: 200px;
        }
    }


    @media (min-width: 769px), (orientation: landscape) {
        #mainCarousel {
            height: 400px;
        }
    }


    #mainCarousel .carousel-inner,
    #mainCarousel .carousel-item {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #mainCarousel .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }


    .carousel-indicators {
        margin-bottom: 5px;
    }
</style>
@endsection
