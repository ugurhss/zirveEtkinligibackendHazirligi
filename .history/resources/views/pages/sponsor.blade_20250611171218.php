
@extends('layouts.app')

@section('title', 'PROGRAM SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')

<section class="zirve-banner" style="margin-bottom: -10px;">
        <div class="zirve-content-wrapper">
            <!-- Başlık -->
            <h1 class="zirve-altbaslik" style="color: white">SÜRDÜRÜLEBİLİRLİK VE İNSAN ZİRVESİ</h1>
            <h2 class="zirve-altbaslik">2025 | BURSA</h2><br>

            <!-- Açıklama Metinleri -->
            <div class="zirve-aciklama">
                <h3 style="text-align: center; color: white;">
                 AMAÇ:
                 <hr style="border: 1px solid white; width: 50%; margin: 10px auto; color: white;">
                </h3>
    <p style="text-align: center;">
                Sürdürülebilirlik ve İnsan Zirvesi 2025 (SİZ'25), Birlik Vakfı Bursa Şubesi'nin koordinasyonu ve Uludağ Üniversitesi ev sahipliğinde 12 Kasım 2025 Çarşamba günü düzenlenecektir. Dijital Dünya'nın getirdiği hızlı değişim ve kaynaklarımızın hızla tüketilmesi karşı, sürdürülebilirlik teması ön plana çıkarılan etkinlikte amaç, gündeme getirilen konularda sürdürülebilirlik kavramının yenilikçi yaklaşımlarla konuşulmasına imkan sağlamaktır. Bununla birlikte "İnsan" vurgusu ile insani değerler olan adil ve ahlak gibi kavramların dijital dünyada önceliklendirilmesi amaçlanmaktadır. Bu amaçlar doğrultusunda düzenlenecek Sürdürülebilirlik ve İnsan Zirvesi bu seneki temasının "Dijital Ekonomi" olmasına karar verilmiştir. Açılış konuşmaları ve 3 panel şeklinde organize edilmesi planlanan etkinliğin katılımcıları ve gündeme getireceği başlıklarla ulusal düzeyde ses getirecek bir etkinlik olacağı düşünülmektedir.
    </p>
            </div>
            <br><br>

            <!-- Logo -->
           <div class="zirve-logo-alani">
          <img src="{{ asset('assets/images/logo.png') }}" alt="Zirve Logosu" class="zirve-logo">
</div>
        </div>
    </section>

    <!-- Zirve Değerleri Bölümü -->
<section class="zirve-degerleri">
    <div class="container">
        <h2 class="zirve-baslik">ZİRVE DEĞERLERİ</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg" alt="Teknoloji Odaklı" style="border-radius: 8px;">
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Yenilikçi Bir Bakış" style="border-radius: 8px;">
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg" alt="Değer Odaklı Bir Yaklaşım" style="border-radius: 8px;">
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg" alt="Geniş Katılım" style="border-radius: 8px;">
            </div>
        </div>
    </div>
</section>

<style>
    /* Genel Stiller */
    .zirve-degerleri {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }

    .zirve-baslik {
        font-size: 2.5em;
        color: rgb(37, 4, 52);
        margin-bottom: 30px;
    }

    .card-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        width: calc(25% - 20px);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    /* Mobil Uyum */
    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
</style>
@endsection
