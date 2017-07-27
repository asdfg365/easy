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

Route::get('/', function () {
    return view('welcome');
});


//Route::controller('/stu/add', 'StuController@add');
//Route::get('/stu/add', 'StuController@add');
//Route::controller('stu', 'StuController');
//Route::controller('stu', 'StuController');
//Route::get('/stu', 'StuController@test');
//Route::get('/stu/create', 'StuController@create');
Route::any('/stu', 'StuController@create');


//Route::auth();
