<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Lib\Olexii\Phone\Phone;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/phone', function(){
    echo (app()->make('Phone'));
});

Route::get('/bitly', function(){
    return Response::view('bitly', ['shorten'=>Bitly::shorten('http://google.com/')]);
});

//Route::get('/',[
//    'as'=>'posts',
//    'uses'=>'PostController@index'
//]);