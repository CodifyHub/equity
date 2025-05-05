<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/properties', function () {
    return view('properties');
})->name('properties.index');

Route::get('/property/show', function () {
    return view('propertyshow');
})->name('property.show');

Route::get('/store', function () {
    return view('store');
})->name('store.index');
