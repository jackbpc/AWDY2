<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PlantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plants', [PlantController::class, 'index']);
