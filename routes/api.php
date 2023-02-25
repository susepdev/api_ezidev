<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\MachineVendorController;
use App\Http\Controllers\PmPeriodController;
use App\Http\Controllers\ProblemTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceBaseController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\TimezoneController;
use App\Http\Controllers\WorkStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('time_zone', TimezoneController::class);
Route::apiResource('entity', EntityController::class);
Route::apiResource('role', RoleController::class);
Route::apiResource('service_base', ServiceBaseController::class);
Route::apiResource('customer_type', CustomerTypeController::class);
Route::apiResource('problem_type', ProblemTypeController::class);
Route::apiResource('pm_period', PmPeriodController::class);
Route::apiResource('service_type', ServiceTypeController::class);
Route::apiResource('machine_vendor', MachineVendorController::class);
Route::apiResource('customer', CustomerController::class);
Route::apiResource('work_status', WorkStatusController::class);