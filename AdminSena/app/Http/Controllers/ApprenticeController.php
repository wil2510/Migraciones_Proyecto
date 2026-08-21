<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    // Muestra la lista de aprendices
    public function index()
    {
        $apprentices = Apprentice::all();

        return view('apprentice.index', compact('apprentices'));
    }

    // Muestra el formulario para crear un aprendiz
    public function create()
    {
        $apprentices = Apprentice::all();
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.index', compact(
            'apprentices',
            'courses',
            'computers'
        ));
    }

    // Guarda el aprendiz
    public function admin(Request $request)
    {
        Apprentice::create($request->all());

        return redirect()->route('apprentice.index');
    }

    // Muestra un aprendiz
    public function show($id)
    {
        $apprentice = Apprentice::find($id);

        return view('apprentice.show', compact('apprentice'));
    }

    // Formulario para editar
    public function edit(Apprentice $apprentice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact(
            'apprentice',
            'courses',
            'computers'
        ));
    }

    // Actualiza el aprendiz
    public function update(Request $request, Apprentice $apprentice)
    {
        $apprentice->update($request->all());

        return redirect()->route('apprentice.index');
    }

    // Elimina el aprendiz
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return redirect()->route('apprentice.index');
    }
}