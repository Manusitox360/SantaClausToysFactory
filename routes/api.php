<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\Kid;
use App\Http\Controllers\Api\Toy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/kids', [KidController::class, 'index'])->name('apindex');
Route::post('/kids', [KidController::class, 'store'])->name('apistore');
Route::get('/kids/{id}', [KidController::class, 'show'])->name('apishow');
Route::put('/kids/{id}', [KidController::class, 'update'])->name('apiupdate');
Route::delete('/kids/{id}', [KidController::class, 'destroy'])->name('apidestroy');


Route::get('/toys/{offerId}/news', [ToyController::class, 'index'])->name('apindexNews');
Route::post('/toys/{offerId}/news', [ToyController::class, 'store'])->name('apistoreNews');
Route::get('/toys/{offerId}/news/{newsID}', [ToyController::class, 'show'])->name('apishowNews');
Route::put('/toys/{offerId}/news/{newsID}', [ToyController::class, 'update'])->name('apiupdateNews');
Route::delete('/toys/{offerId}/news/{newsId}', [ToyController::class, 'destroy'])->name('apidestroyNews');
