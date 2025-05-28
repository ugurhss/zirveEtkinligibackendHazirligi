@extends('layouts.app')

@section('title', 'SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA')

@section('content')
 <section class="zirve-banner">
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
                </p>
            </div>

            <!-- Logo -->
           <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/SIZ LOGO 2.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>
    <!-- Zirve Carousel -->
<div id="zirveCarousel" class="zirve-carousel slide" data-bs-ride="carousel">
    <div class="zirve-carousel-inner">
        <div class="zirve-carousel-item active">
            <img src="{{ asset('assets/images/slide1.jpg') }}" class="zirve-carousel-img" alt="Zirve Görseli 1">
            <div class="zirve-carousel-caption d-none d-md-block">
                <h5>Zirveye Hoşgeldiniz</h5>
                <p>Sürdürülebilirlik ve İnsan Zirvesi 2025</p>
            </div>
        </div>
        <div class="zirve-carousel-item">
            <img src="{{ asset('assets/images/slide2.jpg') }}" class="zirve-carousel-img" alt="Zirve Görseli 2">
            <div class="zirve-carousel-caption d-none d-md-block">
                <h5>Dijital Ekonomi Üzerine Tartışmalar</h5>
                <p>Panel başlıklarıyla dijital dönüşümün kalbi</p>
            </div>
        </div>
    </div>

    <!-- Sol Sağ Kontroller -->
    <button class="zirve-carousel-control-prev" type="button" data-bs-target="#zirveCarousel" data-bs-slide="prev">
        <span class="zirve-carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Önceki</span>
    </button>
    <button class="zirve-carousel-control-next" type="button" data-bs-target="#zirveCarousel" data-bs-slide="next">
        <span class="zirve-carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sonraki</span>
    </button>
</div>

@endsection
