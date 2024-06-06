<?php

use App\Http\Controllers\RandomNumberController;
use Illuminate\Support\Facades\Route;

Route::post('/generate', [RandomNumberController::class, 'generate']);
Route::get('/retrieve/{id}', [RandomNumberController::class, 'retrieve']);
