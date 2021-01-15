<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Auth::routes();

Route::group(['middleware' => ['auth', 'cafw']], function () {
    // Route::get('storage/{file}', 'Api\FileController@fileStorageServe')
    //     ->where(['file' => '.*'])->name('storage.gallery.filee');
    Route::post('/masters/updateStatus', 'MasterAdminController@updateStatus')->name('master.updateStatus');
    Route::get('/masters', 'MasterAdminController@index')->name('masters.index');
    Route::get('/masters/{master}', 'MasterAdminController@show')->name('masters.index.show');
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/masterPoints/updateStatus', 'MasterPointsAdminController@updateStatus')->name('masterPoints.updateStatus');
    Route::get('/masterPoints', 'MasterPointsAdminController@index')->name('masterPoints.index');
    Route::get('/nailJobs', 'NailJobsAdminController@index')->name('nailJobs.index');
    Route::post('/nailJobs/updateStatus', 'NailJobsAdminController@updateStatus')->name('nailJobs.updateStatus');
});

