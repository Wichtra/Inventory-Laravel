<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\CommodityInController;
use App\Http\Controllers\CommodityMutationController;

Route::get('/warehouses', [WarehouseController::class, 'index']);
Route::post('/warehouses', [WarehouseController::class, 'store']);
Route::get('/warehouses/{id}', [WarehouseController::class, 'show']);
Route::put('/warehouses/{id}', [WarehouseController::class, 'update']);
Route::delete('/warehouses/{id}', [WarehouseController::class, 'destroy']);

// ada commodities

Route::get('commodity_in', [CommodityInController::class, 'index']);
Route::post('commodity_in', [CommodityInController::class, 'store']);
Route::get('commodity_in/{id}', [CommodityInController::class, 'show']);
Route::put('commodity_in/{id}', [CommodityInController::class, 'update']);
Route::delete('commodity_in/{id}', [CommodityInController::class, 'destroy']);

// ada commodity out

Route::get('/commodity-mutations', [CommodityMutationController::class, 'index']);
Route::get('/commodity-mutations/{id}', [CommodityMutationController::class, 'show']);
Route::get('/commodity-mutations/create', [CommodityMutationController::class, 'create']);
Route::post('/commodity-mutations', [CommodityMutationController::class, 'store']);
Route::get('/commodity-mutations/{id}/edit', [CommodityMutationController::class, 'edit']);
Route::put('/commodity-mutations/{id}', [CommodityMutationController::class, 'update']);
Route::delete('/commodity-mutations/{id}', [CommodityMutationController::class, 'destroy']);
