<?php

/*
|--------------------------------------------------------------------------
| Web Routes used display for user
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/profile/users', function() {
    return view('profile/users');
})->middleware('auth');

Route::get('/profile/apps', function() {
    return view('profile/apps');
})->middleware('auth');

Route::get('/profile/scores', function() {
    return view('profile/scores');
})->middleware('auth');

Route::get('/profile/questions', function() {
    return view('profile/questions');
})->middleware('auth');

Route::get('/profile/wins', function() {
    return view('profile/wins');
})->middleware('auth');
