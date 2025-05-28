
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
                 AMAÇ
 </P>
    <p style="text-align: center;">
                Sürdürülebilirlik ve İnsan Zirvesi 2025 (SİZ'25), Birlik Vakfı Bursa Şubesi'nin koordinasyonu ve Uludağ Üniversitesi ev sahipliğinde 12 Kasım 2025 Çarşamba günü düzenlenecektir. Dijital Dünya'nın getirdiği hızlı değişim ve kaynaklarımızın hızla tüketilmesi karşı, sürdürülebilirlik teması ön plana çıkarılan etkinlikte amaç, gündeme getirilen konularda sürdürülebilirlik kavramının yenilikçi yaklaşımlarla konuşulmasına imkan sağlamaktır. Bununla birlikte "İnsan" vurgusu ile insani değerler olan adil ve ahlak gibi kavramların dijital dünyada önceliklendirilmesi amaçlanmaktadır. Bu amaçlar doğrultusunda düzenlenecek Sürdürülebilirlik ve İnsan Zirvesi bu seneki temasının "Dijital Ekonomi" olmasına karar verilmiştir. Açılış konuşmaları ve 3 panel şeklinde organize edilmesi planlanan etkinliğin katılımcıları ve gündeme getireceği başlıklarla ulusal düzeyde ses getirecek bir etkinlik olacağı düşünülmektedir.
 </P>
            </div>
            <br>

            <!-- Logo -->
           <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/SIZ LOGO 2.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>

    <!-- Zirve Değerleri Bölümü -->
<section class="zirve-degerleri">
    <div class="container">
        <h2 class="zirve-baslik">ZİRVE DEĞERLERİ</h2>
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('assets/images/teknoloji_odaklı.jpg') }}" alt="Teknoloji Odaklı">
                <h3>TEKNOLOJİ ODAKLI</h3>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/yenilikci_bakis.jpg') }}" alt="Yenilikçi Bir Bakış">
                <h3>YENİLİKÇİ BİR BAKIŞ</h3>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/deger_odakli_yaklasim.jpg') }}" alt="Değer Odaklı Bir Yaklaşım">
                <h3>DEĞER ODAKLI BİR YAKLAŞIM</h3>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/genis_katilim.jpg') }}" alt="Geniş Katılım">
                <h3>GENİŞ KATILIM</h3>
            </div>
        </div>
    </div>
</section>




    @endsection
