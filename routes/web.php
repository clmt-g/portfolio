<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DefaultController::class, 'index'])->name('dashboard');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
