@extends('layouts.app')

@section('title', 'Responsive Website')

@section('content')
    @include('partials.carousel')
    @include('sections.about')
    @include('sections.participants')
@endsection
