<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', static function (string $name) {
    return "Hello, $name";
});

Route::get('/info', function () {
    return "Информация о проекте";
});

Route::get('/news/{id_news}', static function (string $id_news){
    return "Новость № $id_news";
});