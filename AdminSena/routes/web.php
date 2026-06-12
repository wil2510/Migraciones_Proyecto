<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;

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

Route::get('area/create',[AreaController::class,'create']);
Route::post('area/store',[AreaController::class,'store'])->name('Area.store');

Route::get('computer/create',[computerController::class,'create']);
Route::post('Computer/store',[computerController::class,'store'])->name('Computer.store');

Route::get('trainingcenter/create',[TrainingcenterController::class,'create']);
Route::post('trainingcenter/store',[TrainingcenterController::class,'store'])->name('trainingcenter.store');

