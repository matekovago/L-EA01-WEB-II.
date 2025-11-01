<?php

//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/kapcsolat', function () {
    return view('kapcsolat');
});

Route::get('/crud', function () {
    return view('crud');
});

Route::get('/diagram', function () {
    return view('diagram');
});

Route::get('/admin', function () {
    return view('admin');
});
