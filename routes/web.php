<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;

/**
 * Public Pages Routes
 * 
 * All public-facing pages are routed through the PagesController.
 * Each route maps to a corresponding page view with SEO metadata support.
 */

Route::controller(PagesController::class)->group(function () {
    // Home page
    Route::get('/', 'home')->name('home');
    
    // About page
    Route::get('/about', 'about')->name('about');
    
    // Services page
    Route::get('/services', 'services')->name('services');
    
    // Contact page
    Route::get('/contact', 'contact')->name('contact');
    //
    Route::get('/gallery', 'gallery')->name('gallery');

    Route::get('/rooms/{slug}', 'roomDetail')->name('room-detail');
    Route::get('/rooms', 'room');
    Route::get('/room', 'rooms');
});
