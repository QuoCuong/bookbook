<?php

use Illuminate\Http\Request;

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

Route::group([
    'namespace' => 'Api',
    'prefix'    => 'v1',
], function () {

    Route::get('categories/{category}/child', 'CategoryController@child')->name('api.categories.child');
    Route::get('categories/{category}/child_child', 'CategoryController@childChild')->name('api.categories.child.child');
    Route::put('categories/{category}', 'CategoryController@update')->name('api.categories.update');

});
