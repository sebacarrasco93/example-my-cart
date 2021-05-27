<?php

use Illuminate\Support\Facades\Route;

Route::get('/add', function() {
    $itemOne = [
        'uuid' => '111AAA',
        'name' => "Lemon Waffle by SoloWaffles",
        'total' => '8.99'
    ];

    $itemTwo = [
        'uuid' => '222BBB',
        'name' => "Mixed Waffle by SoloWaffles",
        'total' => '9.95'
    ];

    MyCart::add($itemOne);
    MyCart::add($itemTwo);
});

Route::get('get', function() {
    return MyCart::get();
});

Route::get('total', function() {
    return MyCart::total();
});
