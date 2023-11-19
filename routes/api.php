<?php

use App\Http\Controllers\ProductAssetController;
use Illuminate\Support\Facades\Route;



Route::get('products_assets',[ProductAssetController::class,'index']);
Route::post('products_assets',[ProductAssetController::class,'store']);
Route::put('products_assets/{id}',[ProductAssetController::class,'update']);
Route::delete('products_assets/{id}',[ProductAssetController::class,'destroy']);
