<?php

use App\Http\Controllers\Academic\{
    CourseController,
    LessonController,
    ModuleController
};
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\UserController;
use App\Models\Lesson;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [PreferenceController::class, 'index']);


Route::resource('courses', CourseController::class);
Route::resource('modules', ModuleController::class);
Route::resource('lessons', LessonController::class);

Route::get('permissions', [PermissionController::class, 'index']);
Route::get('permission_users', [PermissionController::class, 'permission_user']);

Route::get('users', [UserController::class, 'index']);