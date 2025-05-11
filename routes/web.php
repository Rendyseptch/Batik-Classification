<?php

use App\Http\Controllers\BatikClassificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/classification-batik', function () {
    return view('classification');
});
Route::get('/klasifikasi', [BatikClassificationController::class, 'index'])->name('classification');
Route::post('/classify', [BatikClassificationController::class, 'classify']);
Route::post('/scan', [BatikClassificationController::class, 'scan']);
