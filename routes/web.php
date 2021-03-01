<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('admin.')->prefix('admin')->middleware(['auth', 'role:Admin', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        dd(Auth::user()->role->role_name, "ini admin");
    })->name('dashboard');
});

Route::name('opwil.')->prefix('opwil')->middleware(['auth', 'role:OperatorWilayah', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        dd(Auth::user()->role->role_name, "ini operator wilayah");
    })->name('dashboard');
});

Route::name('opdar.')->prefix('opdar')->middleware(['auth', 'role:OperatorDaerah', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        dd(Auth::user()->role->role_name, "ini operator daerah");
    })->name('dashboard');
});

Route::name('anggota.')->prefix('anggota')->middleware(['auth', 'role:Anggota', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        dd(Auth::user()->role->role_name, "ini anggota");
    })->name('dashboard');
});

Route::get('/hi', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
