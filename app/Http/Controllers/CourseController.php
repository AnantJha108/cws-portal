<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data['course'] = Course::all();
        return view ("admin.manageCourse",$data);
    }

    public function create()
    {
        return view ("admin.addCourse",["categories" => Category::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'),$filename);
        $data['image'] = $filename;

        Course::create($data);
        return redirect()->route("course.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $data['course'] = $course;
        return view('admin.editCourse',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
        ]);

        // $file = $request->image->getClientOriginalName();
        $data = $course;
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->price = $request->price;
        $data->category_id = $request->category_id;
        $data->discount_price = $request->discount_price;
        $data->description = $request->description;
        // $request->image->move(public_path("course_images"), $file);
        // $data->image = $file;
        $data->save();
        return view("admin.dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
