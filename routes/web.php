<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('index');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/services', function () {return view('service');})->name('service');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/blog-detail', function () {return view('blog-detail');})->name('blog-detail');
Route::get('/transparence', function () {return view('transparence');})->name('transparence');
Route::get('/maitrise-des-couts', function () {return view('maitrise-des-couts');})->name('maitrise-des-couts');
Route::get('/maitrise-des-delais', function () {return view('maitrise-des-delais');})->name('maitrise-des-delais');


