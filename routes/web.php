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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/home');
});

Route::get('/account', 'Pages\AccountSettingController@index')->name('accountsetting');

Route::get('/detail/{id}', 'Pages\UserDetailController@index')->name('userdetail');

