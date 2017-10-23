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
Route::pattern('id', '\d+');

Route::get('/', 'PostController@index');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('blog', 'PostController@blog');


Route::get('post/{id}', [
    'uses' => 'PostController@show',
]);

Route::post('post/store', [
    'middleware' => 'auth',
    'before' => 'csrf',
    'uses' => 'PostController@store',
]);

Route::get('post/delete/{id}', [
    //No utilizo la autenticacion para poder probar el ejemplo ahora
    //'middleware' => 'auth',
    'uses' => 'PostController@destroy',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
