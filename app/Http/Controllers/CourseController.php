<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){

        // $courses = Course::all();
        // return view('course.index', compact('courses'));

        $courses = Course::all();
        return response()->json($courses);
    }
    
    public function admin(Request $request){

        // $course = Course::create($request->all());

        $courses = Course::create($request->all());

        // return redirect()->route('course.index');

        return response()->json($courses);
    }

    public function show ($id){

        // $course=Course::find($id);
        // return view('course.show',compact('course'));

        $courses = Course::findOrFail($id);
        return response()->json($courses);
    }

    public function update(Request $request, Course $course){

        // $course->update($request->all());
        // return redirect()->route('course.index');

        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        // $course->delete();
        // return redirect()->route('course.index');

        $course->delete();
        return response()->json($course);
    }
}
