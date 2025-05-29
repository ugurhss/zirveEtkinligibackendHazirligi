<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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
Route::get('/e', function () {
    return view('admin.pages.contact');
});
Route::get('/f', function () {
    return view('admin.pages.message');
});







Route::get('/contact', [MessageController::class, 'index'])->name('admin.contact.index');


Route::get('/contact/{message}', [MessageController::class, 'show'])->name('admin.contact.show');
Route::delete('/contact/{message}', [MessageController::class, 'destroy'])->name('admin.contact.destroy');
