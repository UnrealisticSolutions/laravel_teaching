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

Route::get('/post/create', 'PostController@create');
Route::post('/posts', 'PostController@store');


Route::get('/layout', function () {
    return view('layout');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form2', function () {
    return view('form2');
});

Route::get('/query', function () {
    $name = request('name');
    $age = request('age');
    echo $name . ' age is ' . $age;

    echo '<br>';
});

Route::get('/routeparams/{id}/{name}/{age}', function ($id) {
});

Route::get('/addnumbers/{number1}/{number2}', function ($number1, $number2) {
    $number = 10;
    $number2 = 20;
});

Route::get('/calculations/{num1}/{num2}/{operator}', 'testController@add' );
Route::get('/secondcontrolleroute', 'testController@second' );
ROute::post('/getdatapost','testController@getData');

// /adnumbers/10/20
