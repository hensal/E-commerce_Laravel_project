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



Route::group(['middleware' => ['web']], function() {

  Route::get('/', function () {
    return view('welcome');
   });

Route::get('/auth/login', 'UserController@getLogin');
Route::post('/auth/login', 'UserController@postLogin');
Route::post('/auth/logout', 'UserController@getLogin');

Route::post('/auth/register', 'UserController@getRegister');
Route::post('/auth/register', 'UserController@postRegister');



});





























/*
  Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'signup'
  ]);
  Route::get('/index', [
    'uses' => 'UserController@getSignup',
    'as' => 'dashboard'
  ]);
  
  
  Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'signin'
  ]);
  

  */




