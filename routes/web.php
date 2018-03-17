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



Route::group(['middleware'=>['web','auth']],function (){

    Route::get('/', function () {
        return view('welcome');
    });
});
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');






/**
                                ***** Admin ******
 */

Route::group(['middleware' =>['admin','web']],function(){
    Route::resource('/admin/users','UsersController');
    /****Admin ..users ***/
    Route::post('admin/user/changePassword','UsersController@changePassword');

    Route::resource('admin','AdminController');


});








