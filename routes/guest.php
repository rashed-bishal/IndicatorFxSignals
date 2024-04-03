<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/', [GuestController::class, 'home'])->name('home');
