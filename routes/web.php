<?php

use Illuminate\Support\Facades\Route;

//最初始页面
Route::get('/', function () {
    return "Hello Laravel";
});

//Redirect Routes
Route::get('/there', function () {
    return "there webpage";
});
Route::redirect('/here', 'there');

//View Routes
Route::view('/welcome', 'Layouts.index');
Route::get('/index', function () {
    return view('Layouts.index');
});
