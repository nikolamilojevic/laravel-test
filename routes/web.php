<?php

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
    return view('home');
})->middleware('auth');
// Route::get('/home', function () {
//     return view('home');
// })->middleware('age');

Route::get('home/{id}', 'HomeController@show');

Route::get('/forbidden', function () {
    return view('forbidden');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
