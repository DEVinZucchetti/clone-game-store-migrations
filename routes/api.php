<?php

use App\Http\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;

// implemente sua rota;
Route::get('achievement', [AchievementController::class, 'index']);

Route::post('achievement', [AchievementController::class, 'store']);

Route::delete('achievement/{id}', [AchievementController::class, 'destroy']);

Route::get('achievement/{id}', [AchievementController::class, 'show']);

Route::put('achievement/{id}', [AchievementController::class, 'update']);

