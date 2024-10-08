<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');

Route::get('/products', [\App\Http\Controllers\LandingPageController::class, 'products'])->name('products');

Route::get('locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');