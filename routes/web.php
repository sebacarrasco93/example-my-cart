<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, 'index']);

/* All available simple methods are here */
Route::get('add', [ExampleController::class, 'add']);
Route::get('get', [ExampleController::class, 'get']);
Route::get('count', [ExampleController::class, 'count']);
Route::get('total', [ExampleController::class, 'total']);
