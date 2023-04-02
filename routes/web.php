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

//With parameter
Route::get('/users/{id}', function ($id) {
    echo $id;
})->where('id', '[0-9]+');

//Optional parameter
Route::get('/user/{name?}', function (string $name = "Jane") {
    return $name;
})->where('name', '[A-Za-z]+');

//Multiple restrictions
Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return 'Name: ' . $name . ' ID: ' . $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Naming route
// Route::get('/userss/{id}/profile', function (string $id) {
//     echo $id;
// })->name('profile');

// $url = route('profile', ['id' => 1]);

//Controller Route
use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);
