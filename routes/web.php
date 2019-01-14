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

Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/user/edit/{id}','AdminController@useredit')->name('user.edit');
Route::post('/admin/user/edit/{id}','AdminController@userpost');
Route::get('/admin/user/edit/{id}/accountdefault','AdminController@userAccountDefault');
Route::get('/affiliater','AdminController@affiliater')->name('affiliater');
Route::get('/affiliater/add','AdminController@affiliaterAdd')->name('affiliater.add');
Route::post('/affiliater/add','AdminController@affiliaterPost');
Route::post('/admin','AdminController@submit');
Route::get('/fx', 'HomeController@fx')->name('fx');
Route::get('/fx/{name}', 'HomeController@systemdetail')->name('system.detail');
Route::get('/fx/{name}/open', 'HomeController@systemOpenAccount')->name('system.open');



Route::get('/delivary', 'HomeController@delivary')->name('delivary');
Route::get('/getcsv', 'AdminController@getUserCsv')->name('get.csv');
Route::get('/getcsvPrepend', 'AdminController@getPrependUserCsv')->name('get.csv.prepend');
// Route::get('/getusercsv', 'AdminController@getUserAllCsv');
Route::post('/fx', 'HomeController@userSetAccount')->name('user.set.account');
Route::post('/usersetter', 'AdminController@userSetKeyValue');
Route::get('/download/{filename}', 'ActionController@download');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/upload', 'AdminController@upload')->name('upload');
Route::get('/usersystem', 'AdminController@usersystem')->name('usersystem');
Route::post('/upload', 'AdminController@postUpload');
Route::get('/filelist', 'AdminController@filelist')->name('filelist');
Route::get('/file/delete/{filename}', 'AdminController@fileDelete');

Auth::routes();

