<?php


use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CausalController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\TypeActivityController;

use App\Http\Controllers\Learning_EnviromentController;
use App\Http\Controllers\ShedulingEnviromentController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('location', LocationController::class);
Route::apiResource('career',CareerController::class);



Route::apiResource('sheduling_enviroment', ShedulingEnviromentController::class);

Route::apiResource('learning_enviroment', Learning_EnviromentController::class);
