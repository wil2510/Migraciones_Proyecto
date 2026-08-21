<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Course;
use App\Models\Training_center;

class CourseController extends Controller
{
    /**
     * Mostrar todos los cursos.
     */
    public function index()
    {
        $courses = Course::with([
            'area',
            'trainingCenter'
        ])->get();

        return view('course.index', compact('courses'));
    }

    /**
     * Mostrar formulario para crear un curso.
     */
    public function create()
    {
        // Obtener todas las áreas
        $areas = Area::all();

        // Obtener todos los centros de formación
        $trainingCenters = Training_center::all();

        // Enviar los datos a la vista
        return view('course.create', compact(
            'areas',
            'trainingCenters'
        ));
    }

    /**
     * Guardar un nuevo curso.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        // Crear el curso
        Course::create([
            'name' => $request->name,
            'code' => $request->code,
            'area_id' => $request->area_id,
            'training_center_id' => $request->training_center_id,
        ]);

        // Regresar a la lista de cursos
        return redirect()
            ->route('course.index')
            ->with('success', 'Curso creado correctamente.');
    }

    /**
     * Mostrar un curso específico.
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    /**
     * Mostrar formulario para editar un curso.
     */
    public function edit(Course $course)
    {
        // Obtener áreas
        $areas = Area::all();

        // Obtener centros de formación
        $trainingCenters = Training_center::all();

        // Enviar datos a la vista de edición
        return view('course.edit', compact(
            'course',
            'areas',
            'trainingCenters'
        ));
    }

    /**
     * Actualizar un curso existente.
     */
    public function update(Request $request, Course $course)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code,' . $course->id,
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        // Actualizar el curso
        $course->update([
            'name' => $request->name,
            'code' => $request->code,
            'area_id' => $request->area_id,
            'training_center_id' => $request->training_center_id,
        ]);

        // Regresar a la lista
        return redirect()
            ->route('course.index')
            ->with('success', 'Curso actualizado correctamente.');
    }

    /**
     * Eliminar un curso.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('course.index')
            ->with('success', 'Curso eliminado correctamente.');
    }
}
