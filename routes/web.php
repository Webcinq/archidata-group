<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('index');
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






Route::post('/reserver', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserver');



