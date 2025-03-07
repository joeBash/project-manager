<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::prefix('/projects')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/{project_id}', [ProjectController::class, 'show'])->name('project.show');
    Route::post('/', [ProjectController::class, 'store'])->name('project.store');
    Route::put('/{project_id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/{project_id}', [ProjectController::class, 'destroy'])->name('project.destroy');
})->middleware('auth:api');

Route::prefix('/timesheets')->group(function () {
    Route::get('/', [TimesheetController::class, 'index'])->name('timesheet.index');
    Route::get('/{timesheet_id}', [TimesheetController::class, 'show'])->name('timesheet.show');
    Route::post('/', [TimesheetController::class, 'store'])->name('timesheet.store');
    Route::put('/{timesheet_id}', [TimesheetController::class, 'update'])->name('timesheet.update');
    Route::delete('/{timesheet_id}', [TimesheetController::class, 'destroy'])->name('timesheet.destroy');
})->middleware('auth:api');

Route::prefix('/attributes')->group(function () {
    Route::get('/', [AttributeController::class, 'index'])->name('attribute.index');
    Route::get('/{attribute_id}', [AttributeController::class, 'show'])->name('attribute.show');
    Route::post('/', [AttributeController::class, 'store'])->name('attribute.store');
    Route::put('/{attribute_id}', [AttributeController::class, 'update'])->name('attribute.update');
    Route::delete('/{attribute_id}', [AttributeController::class, 'destroy'])->name('attribute.destroy');
})->middleware('auth:api');

Route::prefix('attribute-values')->group(function () {
    Route::get('/', [AttributeValueController::class, 'index'])->name('attribute-value.index');
    Route::get('/{attribute_value_id}', [AttributeValueController::class, 'show'])->name('attribute-value.show');
    Route::post('/', [AttributeValueController::class, 'store'])->name('attribute-value.store');
    Route::put('/{attribute_value_id}', [AttributeValueController::class, 'update'])->name('attribute-value.update');
    Route::delete('/{attribute_value_id}', [AttributeValueController::class, 'destroy'])->name('attribute-value.destroy');
})->middleware('auth:api');
