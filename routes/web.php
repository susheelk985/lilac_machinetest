<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::resource('/', SearchController::class);
