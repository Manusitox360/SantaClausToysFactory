<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/santa', [KidController::class, 'index'])->name('santa');
Route::get('/santa/{id}', [KidController::class, 'show'])->name('santaShow');
Route::get('/elf', [ToyController::class, 'index'])->name('elf');
Route::get('/elf/{id}', [ToyController::class, 'show'])->name('elfShow');

Route::get('/santa/createListOfGifts', [KidController::class, 'listOfGifts'])->name('santaGifts');