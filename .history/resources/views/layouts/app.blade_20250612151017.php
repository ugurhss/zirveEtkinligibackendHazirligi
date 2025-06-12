<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zirve ')</title>
    <!-- Bootstrap CSS -->
<meta name="description" content="Sürdürülebilirlik ve İnsan Zirvesi 2025 (SİZ'25), Birlik Vakfı Bursa Şubesi'nin koordinasyonu ve Uludağ Üniversitesi ev sahipliğinde 12 Kasım 2025 Çarşamba günü düzenlenecektir.

Dijital Dünya’nın getirdiği hızlı değişim ve kaynaklarımızın hızla tüketilmesine karşı, sürdürülebilirlik teması ön planda çıkarılan etkinlikte amaç, gündeme getirilen konularda sürdürülebilirlik kavramının yenilikçi yaklaşımlarla konuşulmasına imkan sağlamaktır.

Bununla birlikte “İnsan” vurgusu ile insani değerler olan adil ve ahlak gibi kavramların dijital dünyada önceliklendirilmesi amaçlanmaktadır.

Bu amaçlar doğrultusunda düzenlenecek Sürdürülebilirlik ve İnsan Zirvesi’nin bu seneki temasının “Dijital Ekonomi” olmasına karar verilmiştir. Açılış konuşmaları ve 3 panel şeklinde organize edilmesi planlanan etkinliğin, katılımcıları ve gündeme getireceği başlıklarla ulusal düzeyde ses getirecek bir etkinlik olacağı düşünülmektedir.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (Popper dahil) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="{{ asset('assets/images/Birlik_Vakfi_Bursa_Subesi_Logo.svg') }}" type="image/svg+xml">

    <link rel="stylesheet" href="{{ asset('assets/css/styles1.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}

    @stack('styles')
</head>
<body>
    @include('partials.navbar')
          @include('partials.sosyal')


    @yield('content')

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script1.js') }}"></script>
    @stack('scripts')
</body>
</html>
