<!-- Contact Us -->

@extends('layouts.app')

@section('title', 'ZİRVE SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA')

@section('content')

<section class="contact" id="contact">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="container">
            <div class="heading text-center">
                <h2>ZİRVE SÜRDÜRÜLEBİLİRLİK

                    <span> VE İNSAN ZİRVESİ </span></h2>
                <p>Her türlü soru, görüş ve iş birliği talepleriniz için bizimle iletişime geçebilirsiniz. Formu doldurduktan sonra en kısa sürede sizinle irtibata geçeceğiz..
                    <br> Teşekkür ederiz.</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>İletisim Detay</h3>
                        <p>  Bizimle iletişime geçmek ister misiniz? Aşağıdaki formu doldurarak her türlü soru, görüş ya da iş birliği teklifinizi bize iletebilirsiniz. Size en kısa sürede dönüş yapacağız!
</p>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+90 532 060 82 61 , +90 530 661 8487</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>bilgi@bsiz.org</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>Bursa </span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                   <form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <input type="text" class="form-control" name="name" placeholder="İsim ve Soyisim" required>
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="subject" placeholder="Konu" required>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="5" name="message" placeholder="Mesaj" required></textarea>
    </div>
    <button class="btn btn-block" type="submit">Gönder!</button>
</form>

                </div>
            </div>
        </div>
    </section>




    @include('sections.sponsor')
@endsection
