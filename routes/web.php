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
    return view('welcome');
});

Route::get('laravel', function() {
	return view('welcome');
});

Route::get('index/index', function() {
	return view('me.view_share');
});

Route::get('khoahoc', function() {
	// return "hello";
	echo "<h1>hello laravel</h1>";
})->name('laravel');

Route::get('khoahoc2', ['as' => 'laravel2', function() {
	echo "laravel2";
}]);

Route::get('goi_route', function() {
	return redirect()->route('laravel2');
});

Route::group(['prefix' => 'admin'], function() {
	Route::get('user1',  function() {
		echo "user1";
	});

	Route::get('user2',  function() {
		echo "user2";
	});

	Route::get('user3',  function() {
		echo "user3";
	});
});

Route::get('xinchao/{name}', 'MyController@XinChao');

Route::get('request', 'MyController@getRequest');

Route::get('form', function() {
	return view('postForm');
});

Route::post('postForm', 'MyController@postForm')->name('postForm');

Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');

Route::get('uploadFile', function() {
	return view('postFile');
});
Route::post('postFile', 'MyController@postFile')->name('postFile');

Route::get('getJson', 'MyController@getJson');

Route::get('myView', function() {
	return view('me/cong');
});

Route::get('myView2', 'MyController@myView2');

Route::get('time/{t}', 'MyController@time');

View::share('view_share', 'Day la view share');
