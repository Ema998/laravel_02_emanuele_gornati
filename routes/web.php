<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class, 'index'])->name('homepage');

Route::get('chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/chi-siamo/detail/{name}', [AboutUsController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');

Route::get('/prodotti/detail/{id}', [ProdottiController::class, 'prodottiDetail'])->name('prodottiDetail');

Route::post('/contatti/submit',[PublicController::class, 'submit'])->name('contact.submit');