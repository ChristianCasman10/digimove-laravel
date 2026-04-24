<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return redirect('/services');
});

Route::resource('services', ServiceController::class);