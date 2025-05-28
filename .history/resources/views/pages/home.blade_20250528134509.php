@extends('layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')
    @include('partials.carousel')
    @include("sections.about")
    @include("sections.participants")
        @include("partials.sponsor")

@endsection
