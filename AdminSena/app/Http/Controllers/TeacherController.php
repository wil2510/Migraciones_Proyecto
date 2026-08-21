<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Teacher;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // Muestra la lista de instructores
    public function index()
    {
        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));
    }

    // Muestra el formulario para crear un instructor
    public function create()
    {
        $teachers = Teacher::all();
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.index', compact(
            'teachers',
            'areas',
            'training_centers'
        ));
    }

    // Guarda el instructor
    public function admin(Request $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teacher.index');
    }

    // Muestra un instructor
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.show', compact('teacher'));
    }

    // Muestra el formulario para editar
    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.edit', compact(
            'teacher',
            'areas',
            'training_centers'
        ));
    }

    // Actualiza el instructor
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    // Elimina el instructor
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index');
    }
}