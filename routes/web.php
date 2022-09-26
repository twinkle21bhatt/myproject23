<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


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

Route::get('/name/{name}', [UserController::class, 'show']);



//collection in resource method
Route::resource('category', CategoryController::class);

// resource method path are store in product folder
Route::group(['prefix'=> "product"], function(){
    Route::resource('category', CategoryController::class);
});
