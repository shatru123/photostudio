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

//Route::get('/admin/dashboard', function () {
//    return view('admin.dashboard');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/client', 'ClientController@index');

Route::get('client/photos', 'ClientController@all_photos');

Route::get('client/download_all', 'ClientController@download_all');
Route::post('client/download', 'ClientController@download_sel');

Route::group(['middleware'=>'is_admin'], function(){
    Route::resource('admin/clients', 'AdminClientController');

    Route::post('image/upload/store/{id}','AdminClientController@upload_images');


});
