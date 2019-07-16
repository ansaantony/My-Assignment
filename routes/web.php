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
Route::resource('icecream','icecreamsController');
Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add','icecreamsController@create');
Route::get('/addice',array('as'=>'myform','uses'=>'icecreamsController@createice'));
Route::get('/update','icecreamsController@updatep');
Route::any('/prize', 'icecreamsController@showp');
Route::any('/editprize/', 'icecreamsController@showprize');
Route::any('/updateprize/{rid}', 'icecreamsController@prize');
Route::get('/view','icecreamsController@index');
Route::get('/delete-ice/{pid}', 'icecreamsController@destroy');
Route::any('/edit/{pid}', 'icecreamsController@edit');
Route::any('/recipe', 'icecreamsController@recipe');
Route::any('/shape', 'icecreamsController@shape');
Route::any('/size', 'icecreamsController@size');
Route::get('/Editt', 'icecreamsController@show');
Route::get('/addrecipe',array('as'=>'myform','uses'=>'icecreamsController@addrecipee'));
Route::get('/createrecipe/ajax/{rid}',array('as'=>'/createrecipe.ajax','uses'=>'icecreamsController@myrecipeAjax'));
Route::get('/createsize/ajax/{sid}',array('as'=>'/createsize.ajax','uses'=>'icecreamsController@mysizeAjax'));


//custemer
Route::get('/chome', 'CustemerController@index')->name('home');
Route::get('/single','CustemerController@show');