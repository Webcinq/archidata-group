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




Route::get('/etudes-de-cas', function () {
    return view('etudes-cas');
})->name('etudes-cas');

Route::post('/reserver', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserver');
// Ajoutez ces routes dans routes/web.php

// Routes pour les solutions BIM
Route::get('/solutions/bim-data-management', function () {
    return view('solutions.bim-data-management');
})->name('solutions.bim-data-management');

Route::get('/solutions/doe-bim', function () {
    return view('solutions.doe-bim');
})->name('solutions.doe-bim');

Route::get('/solutions/scan-modelisation', function () {
    return view('solutions.scan-modelisation');
})->name('solutions.scan-modelisation');

Route::get('/solutions/jumeaux-numeriques', function () {
    return view('solutions.jumeaux-numeriques');
})->name('solutions.jumeaux-numeriques');

Route::get('/solutions/synthese-bim', function () {
    return view('solutions.synthese-bim');
})->name('solutions.synthese-bim');

Route::get('/solutions/cim-management', function () {
    return view('solutions.cim-management');
})->name('solutions.cim-management');

Route::get('/solutions/data-management', function () {
    return view('solutions.data-management');
})->name('solutions.data-management');

Route::get('/solutions/conseil-accompagnement', function () {
    return view('solutions.conseil-accompagnement');
})->name('solutions.conseil-accompagnement');




