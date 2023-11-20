<?php

use App\Http\Controllers\AvaliationController;
use Illuminate\Support\Facades\Route;

// implemente sua rota;

Route::get('/avaliations/{productId}',[AvaliationController::class, 'index']);
Route::post('/avaliations/{productId}',[AvaliationController::class, 'store']);
Route::put('/avaliations/{productId}',[AvaliationController::class, 'update']);
Route::delete('/avaliations/{productId}',[AvaliationController::class, 'destroy']);
