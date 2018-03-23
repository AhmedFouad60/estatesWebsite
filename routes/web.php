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
   {$$$$$$$$$$$$$$$$$$$$$$$$$$$$=========== Admin =======$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
 */


// ===============================================
// Building control ====================================
// Admin role ====================================
// ===============================================

Route::resource('/admin/building','BuildingController');





Route::group(['middleware' =>['admin','web']],function(){

/**============================== Start siteSetting========================***/

    Route::get('/admin/siteSetting', 'SiteSettingController@index');
    Route::post('/admin/siteSetting', 'SiteSettingController@store');

/**================================End siteSetting==========================***/


/**================================ Start admin-> controlling the users ========***/


    Route::resource('/admin/users','UsersController');

/**==========================End admin-> controlling the users ========================***/


/****=================================Start Admin Resource======================================= ***/
    Route::post('admin/user/changePassword','UsersController@changePassword');

    Route::resource('admin','AdminController');

/****=================================End Admin Resource======================================= ***/





























});








