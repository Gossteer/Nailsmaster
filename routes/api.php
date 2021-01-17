<?php

use App\Http\Controllers\Api\MasterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('nailsjobs', 'NailsJobsController@index')->name('nailsjobs.index');
        Route::get('master/{master}', 'MasterController@show')->name('master.show');
        Route::apiResource('admin', 'AdminController');
        Route::get('storage/{file}', 'FileController@fileStorageServe')
        ->where(['file' => '.*'])->name('storage.gallery.file');
    });
    Route::group(['middleware' => ['auth:api']], function () {
        // сделать проверку на юзера (только они могут делать эти штуки)
        // сделать проверку если с мастера сняли статус или он удалил запись
        Route::post('favoritenailsJobs/{nailsJobs}', 'FavoriteController@storeNailsJobs')->name('favorite.nailsJobs');
        Route::post('favoritemaster/{master}', 'FavoriteController@storeMaster')->name('favorite.master');
        Route::delete('favoritedestroy/{id}', 'FavoriteController@destroy')->name('favorite.destroy');
        Route::post('favoritemasterpoint/{masterpoint}', 'FavoriteController@storeMasterPoint')->name('favorite.masterpoint');
        Route::post('userProfile', 'UserController@profileUser')->name('user.profile');
        Route::post('userFavorite', 'UserController@userFavorite')->name('user.favorite');
        Route::post('userRecordings', 'UserController@userRecordings')->name('user.recordings');
    });
    // Route::group(['namespace' => 'AdminPanel', 'middleware' => ['auth:api','cafa']], function () {
    //     Route::get('masterindex', 'MasterAdminController@index');
    // });
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'RegisterController');
        Route::post('login', 'LoginController');
        Route::post('loginadmin', 'LoginAdminController');
        Route::post('logout', 'LogoutController')->middleware('auth:api');
    });
});
