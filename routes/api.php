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

Route::post('nailsjobs/store-parser', 'Api\NailsJobsController@storeParser')->name('nailsjobs.storeparser');

Route::group(['namespace' => 'Api'], function () {
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('nailsjobs', 'NailsJobsController@indexParser')->name('nailsjobs.indexParser');
        Route::get('master/{master}', 'MasterController@show')->name('master.show');
        // Route::apiResource('admin', 'AdminController');
        Route::get('storage/{file}', 'FileController@fileStorageServe')->where(['file' => '.*'])->name('storage.gallery.file');
    });
    Route::group(['middleware' => ['auth:api']], function () {
        // сделать проверку на юзера (только они могут делать эти штуки)
        // сделать проверку если с мастера сняли статус или он удалил запись
        Route::post('nailsjobs-redirect-to-instagram', 'NailsJobsController@redirectToInstagram')->name('nailsjobs.redirectToInstagram');
        Route::post('favorite/favoritenailsJobs', 'FavoriteController@storeNailsJobs')->name('favorite.nailsJobs');
        Route::post('favorite/favoritemaster', 'FavoriteController@storeMaster')->name('favorite.master');
        Route::post('favorite/favoritemasterpoint', 'FavoriteController@storeMasterPoint')->name('favorite.masterpoint');
        Route::delete('favorite/{favorite}', 'FavoriteController@destroy')->name('favorite.destroy');
        Route::get('userProfile', 'UserController@profileUser')->name('user.profile');
        Route::get('favorite/userFavorite/nailsjobs', 'UserController@userFavoriteNailsJobsParser')->name('user.nailsjobs');
        Route::get('favorite/userFavorite/master', 'UserController@userFavoriteMaster')->name('user.master');
        Route::get('favorite/userFavorite/masterpoint', 'UserController@userFavoriteMasterPoint')->name('user.masterpoint');
        Route::get('favorite/userRecordings', 'UserController@userRecordings')->name('user.recordings');
    });
    // Route::group(['namespace' => 'AdminPanel', 'middleware' => ['auth:api','cafa']], function () {
    //     Route::get('masterindex', 'MasterAdminController@index');
    // });
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'RegisterController');
        Route::post('login', 'LoginController');
        Route::post('loginadmin', 'LoginAdminController');
        Route::post('login-master-admin', 'LoginMasterAdminController');
        Route::post('logout', 'LogoutController')->middleware('auth:api');
    });
});
