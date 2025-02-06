<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [TestController::class, "index"]);
Route::get("/create", [TestController::class, "create"]);
Route::post("/store", [TestController::class, "store"]);
Route::get("/update", [TestController::class, "update"]);
Route::get("/delete", [TestController::class, "delete"]);
Route::get("/create/{id}", [TestController::class, "create"]);
