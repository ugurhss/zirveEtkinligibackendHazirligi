<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;


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
    return view('login.login');
});







Route::get('admin/contact', [MessageController::class, 'index'])->name('admin.contact.index');


Route::get('admin/contact/{message}', [MessageController::class, 'show'])->name('admin.contact.show');
Route::delete('admin/contact/{message}', [MessageController::class, 'destroy'])->name('admin.contact.destroy');








Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');






// kulanucu
Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');
Route::get('/contact', [MessageController::class, 'showForm'])->name('contact.form');
