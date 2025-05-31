<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ParticipantController;


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














Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');






// kulanucu
Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');
Route::get('/contact', [MessageController::class, 'showForm'])->name('contact.form');




//kullanici kayit
Route::get('/kayit', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/kayit', [ParticipantController::class, 'store'])->name('participants.store');





Route::prefix('admin')->group(function () {

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

});
