<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;

Route::name('api.')->group(function () {
    Route::apiResource('students', StudentController::class);
    Route::apiResource('courses', CourseController::class);
});