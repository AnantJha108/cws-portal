<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCourses;

class StudentCoursesController extends Controller
{
    public function join_course(Request $req){
        $course = $req->course_id;
        $user = $req->user_id;

        $sc = new StudentCourses();
        $sc->course_id = $course;
        $sc->user_id = $user;
        $sc->save();

        return redirect()->back();
    }
}
