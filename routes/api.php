<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatikClassificationController;

Route::middleware('api')->group(function () {
    Route::post('/upload', [BatikClassificationController::class, 'upload']);
});
