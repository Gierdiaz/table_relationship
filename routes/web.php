<?php

use App\Http\Controllers\PreferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [PreferenceController::class, 'index']);