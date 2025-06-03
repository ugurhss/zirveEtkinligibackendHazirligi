<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ParticipantController;


Route::get('/', [HomePageController::class, 'homePage'])->name('home');
Route::get('/peak', [HomePageController::class, 'peakPage'])->name('peak');
Route::get('/program', [HomePageController::class, 'programPage'])->name('program');
Route::get('/sponsor', [HomePageController::class, 'sponsorPage'])->name('sponsor');


Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');
Route::get('/contact', [MessageController::class, 'showForm'])->name('contact.form');


















//kullanici kayit
Route::get('/participants', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');






// Giriş yapmamış login rotaları
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin paneli
Route::middleware('auth')->prefix('admin')->group(function () {

    // Participants Routes
    Route::get('/participants', [ParticipantController::class, 'index'])
        ->name('admin.participants.index');
    Route::get('/participants/{participant}', [ParticipantController::class, 'show'])
        ->name('admin.participants.show');
    Route::delete('/participants/{participant}', [ParticipantController::class, 'destroy'])
        ->name('admin.participants.destroy');
    Route::get('/participants/export', [ParticipantController::class, 'export'])
        ->name('admin.participants.export');

    // Contact Messages Routes
    Route::get('/contact', [MessageController::class, 'index'])
        ->name('admin.contact.index');
    Route::get('/contact/{message}', [MessageController::class, 'show'])
        ->name('admin.contact.show');
    Route::delete('/contact/{message}', [MessageController::class, 'destroy'])
        ->name('admin.contact.destroy');
        Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.list');

});
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/participants/export', [ParticipantController::class, 'export'])
        ->name('admin.participants.export');
