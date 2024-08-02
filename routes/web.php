<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/progetti', [PortfolioController::class, 'progetti']);
Route::get('/contatti', [PortfolioController::class, 'contatti']);
