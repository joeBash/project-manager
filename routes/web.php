<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::permanentRedirect('/', '/dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::prefix('/api')->group(function () {
        Route::resource('projects', ProjectController::class);
        Route::resource('timesheets', TimesheetController::class);
        Route::resource('attributes', AttributeController::class);
        Route::resource('attribute-values', AttributeValueController::class);
    });

});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
