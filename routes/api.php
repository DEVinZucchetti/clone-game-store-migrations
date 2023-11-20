<?php

use App\Http\Controllers\AvaliationController;
use Illuminate\Support\Facades\Route;

// implemente sua rota;

Route::get('avaliations',[AvaliationController::class, 'index']);
Route::post('avaliations',[AvaliationController::class, 'store']);
Route::put('avaliations',[AvaliationController::class, 'update']);
Route::delete('avaliations',[AvaliationController::class, 'destroy']);
