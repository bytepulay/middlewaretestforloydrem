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

//use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>['ApiToken']],function () {
    
    
    Route::get('/date', function () {
       return view('test');
    });
    
    Route::get('users/register','Auth\RegisterController@show');
    Route::post('users/register','Auth\RegisterController@register');
    Route::get('checkApi',function(Request $request){
            return "age is greater than 200 ";
    });

    Route::get('checkApi1','ApiTokenCheckController@checkToken');

    Route::post('addData','ApiTokenCheckController@addData');

    Route::post('viewData','ApiTokenCheckController@viewData');

    Route::post('deleteData','ApiTokenCheckController@deleteData');

    Route::post('editData','ApiTokenCheckController@editData');
    
    
});

Route::get('/home', function () {
    return view('home');
});


// Route::get('checkApi',function(Request $request){
//     return "age is greater than 200";
// })->middleware('ApiToken');


