<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\RegistrationController;

// Public routes
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/countries', [CountryController::class, 'index']);