<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AnimalController;

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

Route::group(['prefix' => 'animal'], function (){
    Route::get('/', [AnimalController::class, 'index']);
    Route::get('/{animal}', [AnimalController::class, 'find']); //route model binding
    Route::post('/', [AnimalController::class, 'insert']);
    //Route::put('/{animal}', [AnimalController::class, 'update']); //route model binding
    Route::put('/', [AnimalController::class, 'update']); //route model binding
    Route::delete('/{animal}', [AnimalController::class, 'delete']); //route model binding
});

// GET - GET DATA
// POST - INSERT
// PUT - UPDATE OF WHOLE RESOURCE
// PATCH - UPDATE NOT WHOLE RESOURCE
// DELETE - DELETE DATA
