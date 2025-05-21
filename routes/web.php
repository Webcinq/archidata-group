<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('index');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/services', function () {return view('service');})->name('service');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/blog-detail', function () {return view('blog-detail');})->name('blog-detail');
Route::get('/first_stage', function () {return view('first_stage');})->name('first_stage');
Route::get('/couts', function () {return view('couts');})->name('couts');
Route::get('/delais', function () {return view('delais');})->name('delais');


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'sendMail'])->name('contact.send');
Route::get('/reload-captcha', [App\Http\Controllers\ContactController::class, 'reloadCaptcha']);

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::middleware(['auth'])->group(function () {
    // Liste des réservations
    Route::get('/admin/reservations', [ReservationController::class, 'list'])->name('reservation.list');
    
    // Mettre à jour le statut d'une réservation
    Route::patch('/admin/reservations/{reservation}/status', [ReservationController::class, 'updateStatus'])->name('reservation.update-status');
});
