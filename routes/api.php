<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KidController;
use App\Http\Controllers\Api\ToyController;

Route::get('/kids', [KidController::class, 'index'])->name('apindex');
Route::post('/kids', [KidController::class, 'store'])->name('apistore');
Route::get('/kids/{id}', [KidController::class, 'show'])->name('apishow');
Route::put('/kids/{id}', [KidController::class, 'update'])->name('apiupdate');
Route::delete('/kids/{id}', [KidController::class, 'destroy'])->name('apidestroy');


Route::get('/toys', [ToyController::class, 'index'])->name('apindexNews');
Route::post('/toys', [ToyController::class, 'store'])->name('apistoreNews');
Route::get('/toys/{id}', [ToyController::class, 'show'])->name('apishowNews');
Route::put('/toys/{id}', [ToyController::class, 'update'])->name('apiupdateNews');
Route::delete('/toys/{id}', [ToyController::class, 'destroy'])->name('apidestroyNews');
