<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){

        // $courses = Course::all();
        // return view('course.index', compact('courses'));

        $teachers = Teacher::all();
        return response()->json($teachers);
    }
    
    public function admin(Request $request){

        // $course = Course::create($request->all());

        $teachers = Teacher::create($request->all());

        // return redirect()->route('course.index');

        return response()->json($teachers);
    }

    public function show ($id){

        // $course=Course::find($id);
        // return view('course.show',compact('course'));

        $teachers = Teacher::findOrFail($id);
        return response()->json($teachers);
    }

    public function update(Request $request, Teacher $teacher){

        // $teacher->update($request->all());
        // return redirect()->route('teacher.index');

        $teacher->update($request->all());
        return response()->json($teacher);
    }

    public function destroy(Teacher $teacher)
    {
        // $teacher->delete();
        // return redirect()->route('teacher.index');

        $teacher->delete();
        return response()->json($teacher);
    }
}