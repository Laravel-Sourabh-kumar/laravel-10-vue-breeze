<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;


Route::get('/employees',[EmployeeController::class, 'index']);

Route::post('/save',[EmployeeController::class, 'store']);

Route::put('/update/{id}',[EmployeeController::class, 'update']);

Route::delete('/delete/{id}',[EmployeeController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});