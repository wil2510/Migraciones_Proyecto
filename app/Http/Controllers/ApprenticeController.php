<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    public function index(){

        // $apprentices = Apprentice::all();
        // return view('apprentice.index', compact('apprentices'));

        $apprentices = Apprentice::all();
        return response()->json($apprentices);
    }
    
    public function admin(Request $request){

        // $apprentices = Apprentice::create($request->all());

        $apprentices = Apprentice::create($request->all());

        // return redirect()->route('apprentice.index');

        return response()->json($apprentices);
    }

    public function show ($id){

        // $apprentice=Apprentice::find($id);
        // return view('apprentice.show',compact('apprentice'));

        $apprentices = Apprentice::findOrFail($id);
        return response()->json($apprentices);
    }

    public function update(Request $request, Apprentice $apprentice){

        // $apprentice->update($request->all());
        // return redirect()->route('apprentice.index');

        $apprentice->update($request->all());
        return response()->json($apprentice);
    }

    public function destroy(Apprentice $apprentice)
    {
        // $apprentice->delete();
        // return redirect()->route('apprentice.index');

        $apprentice->delete();
        return response()->json($apprentice);
    }
}