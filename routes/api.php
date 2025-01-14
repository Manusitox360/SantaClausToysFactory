<?php

use App\Http\Controllers\Api\GenderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KidController;
use App\Http\Controllers\Api\ToyController;

Route::get('/santa', [KidController::class, 'index'])->name('apiIndexKids');
Route::post('/santa', [KidController::class, 'store'])->name('apiStoreKids');
Route::get('/santa/{id}', [KidController::class, 'show'])->name('apiShowKids');
Route::put('/santa/{id}', [KidController::class, 'update'])->name('apiUpdateKids');
Route::delete('/santa/{id}', [KidController::class, 'destroy'])->name('apiDestroyKids');

Route::get('/genders', [GenderController::class, 'index'])->name('apiIndexGenders');
Route::post('/genders', [GenderController::class, 'store'])->name('apiStoreGenders');
Route::get('/genders/{id}', [GenderController::class, 'show'])->name('apiShowGenders');
Route::put('/genders/{id}', [GenderController::class, 'update'])->name('apiUpdateGenders');
Route::delete('/genders/{id}', [GenderController::class, 'destroy'])->name('apiDestroyGenders');

Route::get('/elf', [ToyController::class, 'index'])->name('apiIndexToys');
Route::post('/elf', [ToyController::class, 'store'])->name('apiStoreToys');
Route::get('/elf/{id}', [ToyController::class, 'show'])->name('apiShowToys');
Route::put('/elf/{id}', [ToyController::class, 'update'])->name('apiUpdateToys');
Route::delete('/elf/{id}', [ToyController::class, 'destroy'])->name('apiDestroyToys');
