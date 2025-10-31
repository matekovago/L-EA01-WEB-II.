<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('exercise01', function () { return '<h1>Hello world!</h1>'; });
Route::get('exercise02', function () { return [1, 2, 3]; });
Route::get('exercise03', function () { return response()->json(['name' => 'Smith', 'state' => 'CA']); });

Route::get('exercise1', function () { return view('view1'); });

Route::get('exercise2p1', 'App\Http\Controllers\Controller2@print1');

Route::get('exercise2p2', 'App\Http\Controllers\Controller2@print2');
