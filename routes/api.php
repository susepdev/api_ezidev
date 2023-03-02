<?php

use App\Http\Controllers\auth\EditUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UpdateUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// call controller
use App\Http\Controllers\BinLocationController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\DataSlaController;
use App\Http\Controllers\DeliveryCourierController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\ErrorCodeController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\MachineVendorController;
use App\Http\Controllers\PmCodeController;
use App\Http\Controllers\PmPeriodController;
use App\Http\Controllers\ProblemTypeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceBaseController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\SlaPmController;
use App\Http\Controllers\SlaResolutionController;
use App\Http\Controllers\SlaResolveController;
use App\Http\Controllers\SlaResponseController;
use App\Http\Controllers\TimezoneController;
use App\Http\Controllers\SaverityController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\OperationHourController;
use App\Http\Controllers\MachineModelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\PartStatusController;
use App\Http\Controllers\PartTypeController;
use App\Http\Controllers\PicVendorController;
use App\Http\Controllers\RepairedPartStatusController;
use App\Http\Controllers\RepairProgressStatusController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TeamLeaderController;
use App\Http\Controllers\WorkStatusController;

// auth
Route::post('auth/register', RegisterController::class);
Route::post('auth/login', LoginController::class);
Route::apiResource('userupdate', EditUserController::class);


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
Route::apiResource('customer_type', CustomerTypeController::class);
Route::apiResource('problem_type', ProblemTypeController::class);
Route::apiResource('pm_period', PmPeriodController::class);
Route::apiResource('service_type', ServiceTypeController::class);
Route::apiResource('machine_vendor', MachineVendorController::class);
Route::apiResource('customer', CustomerController::class);
Route::apiResource('work_status', WorkStatusController::class);
Route::apiResource('region', RegionController::class);
Route::apiResource('data_sla', DataSlaController::class);
Route::apiResource('sla_response', SlaResponseController::class);
Route::apiResource('sla_resolve', SlaResolveController::class);
Route::apiResource('sla_resolution', SlaResolutionController::class);
Route::apiResource('sla_pm', SlaPmController::class);
Route::apiResource('contract', ContractController::class);
Route::apiResource('pm_code', PmCodeController::class);
Route::apiResource('bin_location', BinLocationController::class);
Route::apiResource('machine', MachineController::class);
Route::apiResource('pic_vendor', PicVendorController::class);
Route::apiResource('repaired_part_status', RepairedPartStatusController::class);
Route::apiResource('part', PartController::class);
Route::apiResource('part_status', PartStatusController::class);
Route::apiResource('error_code', ErrorCodeController::class);
Route::apiResource('repair_progress_status', RepairProgressStatusController::class);
Route::apiResource('delivery_courier', DeliveryCourierController::class);
Route::apiResource('supplier', SupplierController::class);
Route::apiResource('part_type', PartTypeController::class);
Route::apiResource('manager', ManagerController::class);
Route::apiResource('team_leader', TeamLeaderController::class);