<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Placement;
use App\Models\StudentCourses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['course'] = Course::paginate(6);
        $data['placement'] = Placement::paginate(5);
        $data['category'] = Category::all();
        return view('home',$data);
    }

    public function viewCourse($id){
        $data['item'] = Course::find($id);
        $data['category'] = Category::all();
        

        $courseStudentData = StudentCourses::where([["course_id",$id], ["user_id",auth()->id()]])->exists();
        $data['isAlreadyExist'] = $courseStudentData;
        return view('viewCourse',$data);
    }

    public function allCourse(){
        $data['course'] = Course::all();
        $data['category'] = Category::all();
        return view('allCourses',$data);
    }
}
