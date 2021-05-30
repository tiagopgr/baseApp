<?php

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

/*Route::get("/", function () {
    return view("welcome");
});*/

Route::prefix("/dashboard")->name("dashboard.")->group(function () {

    Route::get("/", [\App\Http\Controllers\DashboardController::class, 'index'])->name("index");
    Route::resource("/permission", \App\Http\Controllers\PermissionController::class);
    Route::resource("/role", \App\Http\Controllers\RoleController::class);

});
