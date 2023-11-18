<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('categorys', [CategoryController::class, 'index']);
Route::post('categorys', [CategoryController::class, 'store']);
Route::get('categorys/{id}', [CategoryController::class, 'show']);
Route::delete('categorys/{id}', [CategoryController::class, 'destroy']);
Route::put('categorys/{id}', [CategoryController::class, 'update']);

