<?php

use App\Http\Controllers\EsemenyekController;
use App\Http\Controllers\KategoriakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/esemenyek', [EsemenyekController::class, "index"]);
Route::put('/esemeny', [EsemenyekController::class, "update"]);
Route::get('/kategoriak', [KategoriakController::class, "index"]);
Route::delete('/esemenyek/{id}', [EsemenyekController::class, "destroy"]);




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
