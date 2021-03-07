<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AnggotaDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OpdarDashboardController;
use App\Http\Controllers\OpwilDashboardController;
use Illuminate\Support\Facades\Route;

/**
 * Home Route
 * 
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Auth Route
 * 
 */
Route::middleware('auth', 'verified')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Role
    Route::name('admin.')->prefix('admin')->middleware(['role:Admin'])->group(function(){
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    });
    
    // Operator Wilayah Role
    Route::name('opwil.')->prefix('opwil')->middleware(['role:OperatorWilayah'])->group(function(){
        Route::get('/', [OpwilDashboardController::class, 'index'])->name('dashboard');
        
    });
    
    // Operator Daerah Role
    Route::name('opdar.')->prefix('opdar')->middleware(['role:OperatorDaerah'])->group(function(){
        Route::get('/', [OpdarDashboardController::class, 'index'])->name('dashboard');
    });
    
    // Operator Anggota Role
    Route::name('anggota.')->prefix('anggota')->middleware(['role:Anggota'])->group(function(){
        Route::get('/', [AnggotaDashboardController::class, 'index'])->name('dashboard');
    });

});

require __DIR__.'/auth.php';
