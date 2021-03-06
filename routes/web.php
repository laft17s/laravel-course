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

$_ROUTECONTROLLER = "App\Http\Controllers";

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "About Us Section";
// });

// Route::get('/contact', function () {
//     return "Contact Section";
// });

// Route::get('/forum', function () {
//     return "Forum Section";
// });

// Route::get('/post/{id}', function ($id) {
//     return "Post: " . $id;
// });

Route::get('/home', $_ROUTECONTROLLER . '\ExampleController@home')->name('home');

Route::get('/index/{id}', $_ROUTECONTROLLER . '\ResourceController@index')->name('index');
