<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Course;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();

        return response()->json($courses);
    }

    public function admin(Request $request)
    {
        // $courses = Course::create($request->all());

        $courses = Course::create($request->all());

        if ($request->hasFile("urlFoto")) {
            $file = $request->file("urlFoto");
            $nombreArchivo = "foto_".time().".".$file->guessExtension();
            $request->file('urlFoto')->storeAs('public/images', $nombreArchivo);

            $courses->urlFoto = $nombreArchivo;
            $courses->save();
        }

        // // Si la petición viene de Postman
        // if ($request->wantsJson()) {
        //     return response()->json($areas, 201);
        // }

        return response()->json($courses);

        // return redirect()->route('area.index');
    }

    public function show(Request $request, $id)
    {
        // $area = Area::findOrFail($id);

        // // Si la petición viene de Postman
        // if ($request->wantsJson()) {
        //     return response()->json($area, 200);
        // }

        // return view('area.show', compact('area'));

        $courses = Course::findOrFail($id);
        // $courses = Course::with(['posts.user'])->findOrFail($id);
        // $courses = Course::with(['posts'])->findOrFail($id);
        return response()->json($courses);
    }

    public function update(Request $request, Course $course)
    {
        // $course->update($request->all());

        // // Si la petición viene de Postman
        // if ($request->wantsJson()) {
        //     return response()->json($course, 200);
        // }

        // return redirect()->route('area.index');

        $course->update($request->all());

        return $course;
    }

    public function destroy(Request $request, Course $course)
    {
        // $course->delete();

        // // Si la petición viene de Postman
        // if ($request->wantsJson()) {
        //     return response()->json(['message' => 'Curso eliminado correctamente'], 200);
        // }

        // return redirect()->route('area.index');

        $course->delete();
        return $course;
    }
}