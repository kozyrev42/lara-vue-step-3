<?php

use App\Http\Controllers\PersonController;
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

// роуты нужно вызывать с префиксом /api/url_роута

Route::get('/test', [PersonController::class, 'testApi']);

Route::get('/users', [PersonController::class, 'getUsers']);

Route::post('/person/create', [PersonController::class, 'createPerson']);

Route::get('/person/get', [PersonController::class, 'getPeople']);

Route::get('/person/get/{id}', [PersonController::class, 'getPersonById']);

Route::patch('/person/update', [PersonController::class, 'updatePerson']);

Route::delete('/person/delete/{id}', [PersonController::class, 'deletePerson']);
