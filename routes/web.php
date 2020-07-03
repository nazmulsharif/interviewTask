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

Route::get('/', 'FrontEnd\ContentController@index');
Route::get('/content/{id}', 'FrontEnd\ContentController@Show')->name('content.show');

Auth::routes();


/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'],function(){	
	Route::get('/manage','BackEnd\ContentController@manage')->name('content.manage');
	Route::get('/create','BackEnd\ContentController@create')->name('content.create');
	Route::post('/content/store','BackEnd\ContentController@store')->name('content.store');
	Route::get('/content/update/{id}','BackEnd\ContentController@update')->name('content.update');
});
