<?php

use App\Http\Controllers\Academic\{
    CourseController,
    LessonController,
    ModuleController
};

use App\Http\Controllers\PreferenceController;
use App\Models\Lesson;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [PreferenceController::class, 'index']);


Route::resource('courses', CourseController::class);
Route::resource('modules', ModuleController::class);
Route::resource('lessons', LessonController::class);