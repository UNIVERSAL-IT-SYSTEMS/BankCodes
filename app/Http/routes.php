<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('countries{filter?}','CountryController@index');
Route::get('countries/{id}', 'CountryController@show');

Route::get('countries/{id}/banks', ['as' => 'listBanks' , 'uses' => 'BankController@index']);
Route::get('countries/{alpha2}/banks/{id}', ['as' => 'getBanks', 'uses' => 'BankController@show']);

Route::get('search', 'SearchController@search');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
