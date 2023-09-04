<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        $courses = Course::create(['name' => 'Laravel']);

        $courses = Course::with('modules.lessons')->first();
        $modules = Module::first();

        $data_modules = [
            'name' => 'Módulo 1: Relacionamento de tabelas.'
        ];

        $data_lessons = [
            'name' => 'One To One, One To Many and Many To Many.'
        ];

        $courses->modules()->create($data_modules);
        $modules->lessons()->create($data_lessons);

        dd($courses);
        
    }
}
