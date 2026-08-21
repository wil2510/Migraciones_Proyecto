<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Course;
use App\Models\Training_center;

class CourseController extends Controller
{
    function index()
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        // LÍNEA CORREGIDA: Se cambia 'course.admin' por 'course.create'
        return view('course.create', compact(
            'areas',
            'training_centers'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        Course::create($request->all());

        return redirect()->route('course.index')->with('success', 'Curso creado exitosamente.');
    }

    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.edit', compact('course', 'areas', 'training_centers'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code,' . $course->id,
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course->update($request->all());

        return redirect()->route('course.index')->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Curso eliminado exitosamente.');
    }
}