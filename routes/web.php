<?php

use App\Http\Controllers\DataclearController;
use App\Http\Controllers\DatagetController;
use App\Http\Controllers\DatasaveController;
use Illuminate\Support\Facades\Route;

// Route::get('/{token}', [WelcomeController::class, 'WelcomePage']);

Route::get('/save', [DatasaveController::class, 'DataSave']);
Route::get('/get', [DatagetController::class, 'DataGet']);
Route::get('/clear', [DataclearController::class, 'DataClear']);
