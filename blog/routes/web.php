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
    return view('welcome',['name'=>'Jacob Hsu']);
});

Route::get('member/{id}', 'MemberController@info')
->where('id', '[0-9]+');

Route::any('request', 'RequestController@store');


Route::group(['middleware'=>['web']], function(){
	Route::any('sess1', 'SessController@session1');
	Route::any('sess2', 'SessController@session2');
});

// 宣傳頁面
Route::any('activity0', 'SessController@activity0'); 
// 活動頁面
Route::group(['middleware'=>['activity']], function(){
	Route::any('activity', 'SessController@activity');
});


Route::get('form/index', 'FormController@index');


//Route::get('member/info', ['uses'=>'MemberController@info']);

// Route::get('member/info', [
// 	'uses'=>'MemberController@info',
// 	'as'=>'memberInfo'
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
