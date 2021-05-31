<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, 'index']);

/* All available simple methods are here */
Route::get('add', [ExampleController::class, 'add']);
Route::get('get', [ExampleController::class, 'get']);
Route::get('count', [ExampleController::class, 'count']);
Route::get('total', [ExampleController::class, 'total']);
Route::get('findByUuid/{uuid}', [ExampleController::class, 'findByUuid']);

Route::get('findByUuid/{uuid}/delete', [ExampleController::class, 'deleteByUuid']);
Route::get('findByUuid/{uuid}/update', [ExampleController::class, 'updateByUuid']);
