
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

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<style>
    #mainCarousel {
    height: 300px; /*  */
}

#mainCarousel .carousel-inner,
#mainCarousel .carousel-item,
#mainCarousel .carousel-item img {
    height: 100%; /* */
    object-fit: cover; /*  */
}
#mainCarousel .carousel-item img {
    width: 100%;
    height: auto; /*  */
    object-fit: cover; /**/
    /* object-fit: contain; --*/
}


</style>

    @endsection

