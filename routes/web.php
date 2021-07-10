<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/public/index', function () {
     return view('public/index');
})->name('public.index');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/post/create', 'PostController@create')->name('posts.create');

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::match(['PUT', 'PATCH'], '/posts/{post}', 
'PostController@update')->name('posts.update');

Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');

Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');


Auth::routes();


Route::prefix('admin')
     ->namespace('Admin')
     ->middleware('auth')
     ->name('admin.')
     ->group(function (){
          Route::get('/','HomeController@index')
          ->name('index');

          Route::get('/posts', 'PostController@index')->name('posts.index');
     });


