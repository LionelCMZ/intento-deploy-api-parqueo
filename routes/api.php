<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GuardiaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes','index');
    Route::post('/cliente','store');
    Route::get('/cliente/{id}','show');
    Route::put('/cliente/{id}','update');
    Route::delete('/cliente/{id}','destroy');
});
Route::controller(AutoController::class)->group(function(){
    Route::get('/autos','index');
    Route::post('/auto','store');
    Route::get('/auto/{id}','show');
    Route::put('/auto/{id}','update');
    Route::delete('/auto/{id}','destroy');
});
Route::controller(GuardiaController::class)->group(function(){
    Route::get('/guardias','index');
    Route::post('/guardia','store');
    Route::get('/guardia/{id}','show');
    Route::put('/guardia/{id}','update');
    Route::delete('/guardia/{id}','destroy');
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
});