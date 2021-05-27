<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        '/add' => 'Add the 2 items to a Cart',
        '/get' => 'Get the items',
        '/count' => 'Get the count of the items in the cart (on this case 2)',
        '/total' => 'Get the total items (on this case 18.94)',
    ];
});

Route::get('add', function() {
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


Route::get('count', function() {
    return MyCart::count();
});

Route::get('total', function() {
    return MyCart::total();
});
