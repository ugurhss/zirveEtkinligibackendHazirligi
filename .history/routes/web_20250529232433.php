<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('pages.home');
});








Route::get('admin/contact', [MessageController::class, 'index'])->name('admin.contact.index');


Route::get('admin/contact/{message}', [MessageController::class, 'show'])->name('admin.contact.show');
Route::delete('admin/contact/{message}', [MessageController::class, 'destroy'])->name('admin.contact.destroy');







// kulanucu
Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');
