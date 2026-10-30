<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('areas', [AreaController::class, 'admin'])->name('api.v1.areas.admin');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('areas/{area}', [AreaController::class, 'update'])->name('api.v1.area.update');
Route::delete('areas/{area}', [AreaController::class, 'destroy'])->name('api.v1.area.destroy');

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('api.v1.trainingcenters.index');
Route::post('trainingcenters', [TrainingCenterController::class, 'admin'])->name('api.v1.trainingcenters.admin');
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('api.v1.trainingcenters.show');
Route::put('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'update'])->name('api.v1.trainingcenter.update');
Route::delete('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'destroy'])->name('api.v1.trainingcenter.destroy');

Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class, 'admin'])->name('api.v1.computers.admin');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('api.v1.computers.show');
Route::put('computers/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computers/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');

Route::get('courses', [CourseController::class, 'index'])->name('api.v1.courses.index');
Route::post('courses', [CourseController::class, 'admin'])->name('api.v1.courses.admin');
Route::get('courses/{course}', [CourseController::class, 'show'])->name('api.v1.courses.show');
Route::put('courses/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');

Route::get('teachers', [TeacherController::class, 'index'])->name('api.v1.teachers.index');
Route::post('teachers', [TeacherController::class, 'admin'])->name('api.v1.teachers.admin');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teachers.show');
Route::put('teachers/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teacher.destroy');

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentices.index');
Route::post('apprentices', [ApprenticeController::class, 'admin'])->name('api.v1.apprentices.admin');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentices.show');
Route::put('apprentices/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy');
