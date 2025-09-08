<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');
