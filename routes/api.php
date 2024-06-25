<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\AccidentTypeController;
use App\Http\Controllers\API\TokenController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepotController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('accidents', AccidentController::class);
    Route::apiResource('companies', CompanyController::class);
    Route::apiResource('depots', DepotController::class);
    Route::apiResource('accident-types', AccidentTypeController::class);
});

Route::post('login', [TokenController::class, 'login']);
Route::post('register', [TokenController::class, 'register']);
Route::post('logout', [TokenController::class, 'logout'])->middleware('auth:sanctum');
