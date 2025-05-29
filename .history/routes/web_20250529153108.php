<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/a', function () {
    return view('pages.peak');
});
Route::get('/b', function () {
    return view('pages.program');
});
Route::get('/c', function () {
    return view('pages.sponsor');
});
Route::get('/d', function () {
    return view('pages.contact');
});

Route::get('/d', function () {
    return view('admin.layouts.app');
});
