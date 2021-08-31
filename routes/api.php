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

// Route::get('/checkApi1','ApiTokenCheckController@checkToken');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['middleware'=>['ApiToken']],function () {
    
    
    
    // Route::get('users/register','Auth\RegisterController@show');
    // Route::post('users/register','Auth\RegisterController@register');
    Route::post('/checkApi',function(Request $request){
            return "age is greater than 200 ";
    });

    Route::post('/checkApi1','ApiTokenCheckController@checkToken');


    Route::post('addData','ApiTokenCheckController@addData');

    Route::post('viewData','ApiTokenCheckController@viewData');

    Route::post('deleteData','ApiTokenCheckController@deleteData');

    Route::post('editData','ApiTokenCheckController@editData');
    
    
});

