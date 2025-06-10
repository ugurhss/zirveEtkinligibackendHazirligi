@extends('layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')
      @include('partials.sosyal')

@include('sections.carousel')
    @include("sections.about")
    @include("sections.participants")
        @include("sections.sponsor")

@endsection
