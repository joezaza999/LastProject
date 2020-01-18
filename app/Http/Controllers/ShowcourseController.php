<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class ShowcourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('pages.course',[
            'courses' => $course
        ]);
    }
}