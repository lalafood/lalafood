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
	return view('index');
});
Route::controller('admin/login','Admins\LoginController');

// Start Online Page
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admins'],function(){
	Route::controller('index','BlankController'); //go to index admin
	Route::controller('user','UserController');
	Route::controller('upload','FoodController');
});
Route::group(['prefix'=>'member','middleware'=>'auth','namespace'=>'Users'],function(){
	Route::controller('index','GeneralController');
	Route::controller('type','TypeFoodController');
	//Route::controller('comment','CommentController');//comment and rating
	Route::controller('changepassworde','ProfileController');//change pass
	//Route::controller('user','UserController');

});
