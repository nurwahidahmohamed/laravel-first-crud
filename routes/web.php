<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\InventoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories.index');
Route::get('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('/inventories/create', [InventoryController::class, 'store']);
Route::get('/inventories/{inventory}', [InventoryController::class, 'show'])->name('inventories.show');
Route::get('/inventories/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
Route::post('/inventories/{inventory}/edit', [InventoryController::class, 'update'])->name('inventories.update');
Route::delete('/inventories/destroy/{inventory}', [InventoryController::class, 'destroy'])->name('inventories.destroy');


// Route::get('/homestays', [HomestayController::class, 'index'])->name('homestays.index');
// Route::get('/homestays/create', [HomestayController::class, 'create'])->name('homestays.create');
// Route::post('/homestays/create', [HomestayController::class, 'store']);
// Route::get('/homestays/{homestay}', [HomestayController::class, 'show'])->name('homestays.show');
// Route::get('/homestays/{homestay}/edit', [HomestayController::class, 'edit'])->name('homestays.edit');
// Route::post('/homestays/{homestay}/edit', [HomestayController::class, 'update'])->name('homestays.update');
// Route::delete('/homestays/destroy/{homestay}', [HomestayController::class, 'destroy'])->name('homestays.destroy');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles/create', [VehicleController::class, 'store']);
Route::get('/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::post('/vehicles/{vehicle}/edit', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('/vehicles/destroy/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/{user}/edit', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
