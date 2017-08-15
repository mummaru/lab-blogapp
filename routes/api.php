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

//Route::post('/post', 'PostController@store');
Route::group(['prefix' => 'blog'], function () {
    // API Create Article
    Route::post('/', 'PostController@store');

    // API Edit Article
    Route::put('/edit', [
        'uses'	=> 'API\DashboardController@editArticle',
        'as'	=> 'api/dashboard/article/edit'
    ]);
    // API Delete Article
    Route::delete('/delete', [
        'uses'	=> 'API\DashboardController@deleteArticle',
        'as'	=> 'api/dashboard/article/delete'
    ]);
});
