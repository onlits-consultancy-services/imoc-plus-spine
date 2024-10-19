<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountGroupController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProgramController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('accounts', AccountController::class);
Route::apiResource('account-groups', AccountGroupController::class);
Route::apiResource('attendances', AttendanceController::class);
Route::apiResource('batches', BatchController::class);
Route::apiResource('enrollments', EnrollmentController::class);
Route::apiResource('leads', LeadController::class);
Route::apiResource('learners', LearnerController::class);
Route::apiResource('organizations', OrganizationController::class);
Route::apiResource('programs', ProgramController::class);

