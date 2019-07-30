<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'AppController@register');
Route::post('/login', 'AppController@login');
Route::post('/request/code', 'AppController@requestCode');

Route::post('/member/get', 'AppController@getMembers');
Route::post('/member/add', 'AppController@addMembers');
Route::post('/member/delete', 'AppController@deleteMembers');