<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// call controller
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceBaseController;
use App\Http\Controllers\TimezoneController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\SaverityController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\OperationHourController;
use App\Http\Controllers\MachineModelController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('time_zone', TimezoneController::class);
Route::apiResource('entity', EntityController::class);
Route::apiResource('role', RoleController::class);
Route::apiResource('service_base', ServiceBaseController::class);
Route::apiResource('saverity', SaverityController::class);
Route::apiResource('operation_hour', OperationHourController::class);
Route::apiResource('machine_model', MachineModelController::class);