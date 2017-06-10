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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    $data = ['name' => 'tad', 'say' => '嗨！'];
    return view('welcome', $data);
});

Route::get('/action/create', function () {
    return view('create');
})
    ->name('action.create');

Route::post('/action', function () {
    return view('store');
})->name('action.store');
