<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers;
Route::get('/', 'RiiixTwoController@index');
Route::get('/about', 'RiiixTwoController@about');
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Dilianur';
});

Route::get('/index', function () {
    return view('riiix_one.index');
});

Route::get('/articles/{id}/{second_parametr}', function ($id, $second_parametr) {
    return 'Возвращаем: ' . $id . "<br>" . 'To parametr: ' . $second_parametr;
});
*/
