<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bt', function () {
    return view('index');
});

Route::get('/page1.blade.php', function () {
    return view('page1');
});
Route::get('/page2.blade.php', function () {
    return view('page2');
});
Route::get('/page3.blade.php', function () {
    return view('page3');
});
Route::get('/page4.blade.php', function () {
    return view('page4');
});
Route::get('/trangchu.blade.php', function () {
    return view('trangchu');
});