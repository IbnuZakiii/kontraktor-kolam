<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('services')->group(function () {
    Route::get('/construction', function () {
        return view('services.construction');
    })->name('services.construction');
    
    Route::get('/renovation', function () {
        return view('services.renovation');
    })->name('services.renovation');
    
    Route::get('/maintenance', function () {
        return view('services.maintenance');
    })->name('services.maintenance');
});

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');