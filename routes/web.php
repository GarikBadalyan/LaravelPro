<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::get('contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::get('contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');
Route::get('contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');

