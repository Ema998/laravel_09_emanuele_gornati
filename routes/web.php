<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/prodotti', [ProdottiController::class, 'prodotti'])->name('prodotti');
Route::get('/aggiungiProdotto', [PublicController::class, 'aggiungiProdotto'])->name('aggiungiProdotto');
Route::post('/aggiungiProdotto/submit', [ProdottiController::class, 'store'])->name('aggiungiProdottoSubmit');
