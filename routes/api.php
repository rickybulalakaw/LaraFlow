<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\OfficeController;
use App\Http\Controllers\api\EmployeeController;

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/test', [AuthController::class, 'test']);
Route::get('/offices', [OfficeController::class, 'index']);
Route::middleware('auth:sanctum')->group(function(){
    
    Route::get('/users/office/{officeUuid}', [UserController::class, 'office']);
    Route::get('/office_types', [OfficeController::class, 'types']);
    
    Route::get('/office/{office}', [OfficeController::class, 'show']);
    
    Route::get('/employees', [EmployeeController::class, 'index'] );
    Route::get('/employee/{employeeData}', [EmployeeController::class, 'show'] );
});

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

