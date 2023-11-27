<?php

use App\Http\Controllers\ProductAssetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\ProductMarkerController;


Route::get('markers', [MarkerController::class, 'index']);
Route::post('markers', [MarkerController::class, 'store']);
Route::delete('markers/{id}', [MarkerController::class, 'destroy']);

Route::get('product_markers', [ProductMarkerController::class, 'index']);
Route::post('product_markers', [ProductMarkerController::class, 'store']);
Route::delete('product_markers/{id}', [ProductMarkerController::class, 'destroy']);

Route::get('products_assets',[ProductAssetController::class,'index']);
Route::post('products_assets',[ProductAssetController::class,'store']);
Route::put('products_assets/{id}',[ProductAssetController::class,'update']);
Route::delete('products_assets/{id}',[ProductAssetController::class,'destroy']);
