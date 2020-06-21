<?php

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/********* START AUTH ENDPOINTS ****************/

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

/********* END AUTH ENDPOINTS *******************/


/********* START API V1 ENDPOINTS ***************/

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    /**
     * Returns the authenticated user's info
     */
    Route::post('me', 'AuthController@me');

    /**
     * Refresh the authenticated user's token
     */
    Route::post('refresh', 'AuthController@refresh');
});

/*********** END API V1 ENDPOINTS ***************/
