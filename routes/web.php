<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatacenterController;
use App\Http\Controllers\DashboardController;

// Datacenter Selection Routes
Route::get('/', [DatacenterController::class, 'index'])->name('datacenter.selection');
Route::post('/set-datacenter', [DatacenterController::class, 'setDatacenter'])->name('datacenter.set');

// Include Authentication Routes
require __DIR__.'/auth.php';

// Dashboard with Middleware
Route::middleware(['auth', 'ensure.datacenter'])->group(function () {
    Route::get('/dashboard/{datacenter}', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/licenses/create', [DashboardController::class, 'create'])->name('licenses.create');
    Route::post('/licenses', [DashboardController::class, 'store'])->name('licenses.store');
    Route::get('/licenses/{id}/edit', [DashboardController::class, 'edit'])->name('licenses.edit');
    Route::put('/licenses/{id}', [DashboardController::class, 'update'])->name('licenses.update');
    Route::delete('/licenses/{id}', [DashboardController::class, 'destroy'])->name('licenses.destroy');
});
