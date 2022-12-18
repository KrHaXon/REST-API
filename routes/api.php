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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/Halamus/305365/people',\App\Http\Controllers\controllerpeople::class);
Route::get('/Halamus/305365/people',[controllerpeople::class,'show']);
Route::post('/Halamus/305365/people', [\App\Http\Controllers\Api\PeopleController::class, 'store']);
Route::delete('Halamus/305365/people/{id}', [\App\Http\Controllers\Api\PeopleController::class, 'delete']);
Route::put('/Halamus/305365/people/{id}/{name}', [\App\Http\Controllers\Api\PeopleController::class, 'update']);
