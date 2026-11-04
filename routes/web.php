<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello from IT 373';
});

Route::get('/books/{id}', function ($id) {
    return 'You asked for the book number' .$id;
});


