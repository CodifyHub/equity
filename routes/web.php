<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/properties', [HomeController::class, 'properties'])->name('properties.index');

Route::get('/property/show/{slug}', [HomeController::class, 'propertyShow'])->name('property.show');

Route::get('/store', [HomeController::class, 'store'])->name('store.index');

Route::get('/device/show/{slug}', [HomeController::class, 'deviceShow'])->name('device.show');

Route::post('inquiry', [HomeController::class, 'inquiry'])->name('inquiry.store');
