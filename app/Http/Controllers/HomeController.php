<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['course'] = Course::paginate(6);
        return view('home',$data);
    }

    public function viewCourse($id){
        $data['item'] = Course::find($id);
        return view('viewCourse',$data);
    }
}
