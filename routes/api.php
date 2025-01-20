<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KidController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\ToyController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\Api\MinimumAgeController;

Route::get('/santa/createListOfGifts', [KidController::class, 'listOfGifts'])->name('apiSantaGifts');

Route::get('/santa', [KidController::class, 'index'])->name('apiIndexKids');
Route::post('/santa', [KidController::class, 'store'])->name('apiStoreKids');
Route::get('/santa/{id}', [KidController::class, 'show'])->name('apiShowKids');
Route::put('/santa/{id}', [KidController::class, 'update'])->name('apiUpdateKids');
Route::delete('/santa/{id}', [KidController::class, 'destroy'])->name('apiDestroyKids');

Route::get('/gender', [GenderController::class, 'index'])->name('apiIndexGenders');
Route::post('/gender', [GenderController::class, 'store'])->name('apiStoreGenders');
Route::get('/gender/{id}', [GenderController::class, 'show'])->name('apiShowGenders');
Route::put('/gender/{id}', [GenderController::class, 'update'])->name('apiUpdateGenders');
Route::delete('/gender/{id}', [GenderController::class, 'destroy'])->name('apiDestroyGenders');

Route::get('/country', [CountryController::class, 'index'])->name('apiIndexCountries');
Route::post('/country', [CountryController::class, 'store'])->name('apiStoreCountries');
Route::get('/country/{id}', [CountryController::class, 'show'])->name('apiShowCountries');
Route::put('/country/{id}', [CountryController::class, 'update'])->name('apiUpdateCountries');
Route::delete('/country/{id}', [CountryController::class, 'destroy'])->name('apiDestroyCountries');

Route::get('/elf', [ToyController::class, 'index'])->name('apiIndexToys');
Route::post('/elf', [ToyController::class, 'store'])->name('apiStoreToys');
Route::get('/elf/{id}', [ToyController::class, 'show'])->name('apiShowToys');
Route::put('/elf/{id}', [ToyController::class, 'update'])->name('apiUpdateToys');
Route::delete('/elf/{id}', [ToyController::class, 'destroy'])->name('apiDestroyToys');

Route::get('/minimumAge', [MinimumAgeController::class, 'index'])->name('apiIndexMinimumAge');
Route::post('/minimumAge', [MinimumAgeController::class, 'store'])->name('apiStoreMinimumAge');
Route::get('/minimumAge/{id}', [MinimumAgeController::class, 'show'])->name('apiShowMinimumAge');
Route::put('/minimumAge/{id}', [MinimumAgeController::class, 'update'])->name('apiUpdateMinimumAge');
Route::delete('/minimumAge/{id}', [MinimumAgeController::class, 'destroy'])->name('apiDestroyMinimumAge');