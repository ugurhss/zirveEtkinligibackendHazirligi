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
                </p>
            </div>

            <!-- Logo -->
           <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/SIZ LOGO 2.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>
<div id="zirveCarousel" class="zirve-carousel carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
  <!-- Göstergeler -->


  <!-- Görsel İçerik -->
  <div class="carousel-inner zirve-carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 zirve-carousel-img" src="{{ asset('assets/images/t2.jpg') }}" alt="İlk Slâyt">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 zirve-carousel-img" src="{{ asset('assets/images/T1.jpg') }}" alt="İkinci Slâyt">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 zirve-carousel-img" src="{{ asset('assets/images/FLAG1.jpg') }}" alt="Üçüncü Slâyt">
    </div>
  </div>
</div>
<div class="program-container">
    <h2>Program</h2>
    <h3>12 Kasım Çar</h3>
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
    <!-- Diğer etkinlikler burada devam edebilir -->
@endsection
