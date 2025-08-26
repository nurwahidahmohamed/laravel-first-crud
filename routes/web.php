<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\InventoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/inventories', [InventoryController::class, 'index']);
Route::get('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('/inventories/create', [InventoryController::class, 'store']);
Route::get('inventories/{inventory}', [InventoryController::class, 'show'])->name('inventories.show');

Route::get('/vehicles', [VehicleController::class, 'index']);
