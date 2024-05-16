<?php

use App\Http\Controllers\TourismInfoController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.landing');
})->name('landing');

Route::get('/home', function () {
    return view('pages.landing');
})->name('landing');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::middleware(['auth'])->group(function () {
    Route::get('/settings', function () {
        return view('pages.settings');
    })->name('settings');

    Route::get('/rekomendasi', [RecommendationController::class, 'index'])->name('rekomendasi');

    Route::get('/tourism_info/create', [TourismInfoController::class, 'create'])->name('tourism_info.create');
    Route::post('/tourism_info', [TourismInfoController::class, 'store'])->name('tourism_info.store');
});

Route::get('/informasi', [TourismInfoController::class, 'index'])->name('informasi');

Route::get('/booking', function() {
    return redirect('https://thirdpartybooking.com');
})->name('booking');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/settings', function () {
        return view('pages.settings');
    })->name('settings');
    Route::put('/settings', [UserController::class, 'update'])->name('settings.update');
});
