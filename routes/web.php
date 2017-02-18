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

Route::get('/', 'IndexController@index');

Route::any('/service/validate_code/create', 'Service\ValidateController@create');
Route::any('/service/validate_phone/send', 'Service\ValidateController@sendSMS');

Route::get('/login', 'MemberController@login');
Route::get('/register', 'MemberController@register');

Route::post('/service/register', 'MemberController@register');