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
    return view('blade.home_page',['name'=>'raj']);
});
Route::get('/contact', 'userController@index');

Route::get('/about',function(){
    return view('blade.about_page');
});

Route::get('/log',function(){
    return view('blade.log');
});

Route::get('/reg',function(){
    return view('blade.reg');
});

// Route::get('/2',function(){
//     return view('layouts.app');
// });

// Route::get('/3',function(){
//     return view('welcome');
// });

// Route::get('/4',function(){
//     return view('lesson1');
// });
// Auth::routes();

// // Route::get('/about', 'HomeController@index')->name('home');

// Route::get('/hello','helloController@index');