<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;
use Cloudinary\Cloudinary;

class TrainingCenterController extends Controller
{
    public function index(){

        $trainingcenters = Training_center::all();
        return response()->json($trainingcenters);

        // $trainingcenters = Training_center::all();
        // return view('trainingcenter.index', compact('trainingcenters'));
    }

    public function admin(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'centros',
                'resource_type' => 'image',
            ]
        );

        $trainingcenters = Training_center::create([
            'name' => $request->name,
            'location' => $request->location,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Centro creado correctamente',
            'data' => $trainingcenters,
        ], 201);

        // $trainingcenters = Training_center::create($request->all());
        // return redirect()->route('trainingcenter.index');
        // return response()->json($trainingcenters);

    }

    public function show ($id){

        // $trainingcenter=Training_center::find($id);

        // return view('trainingcenter.show',compact('trainingcenter'));

        $trainingcenters = Training_center::findOrFail($id);
        return response()->json($trainingcenters);
    }

    public function update(Request $request, Training_center $trainingcenter){

        // $trainingcenter->update($request->all());

        // return redirect()->route('trainingcenter.index');
        $trainingcenter->update($request->all());
        return response()->json($trainingcenter);

    }

    public function destroy(Training_center $trainingcenter)
    {
        // $trainingcenter->delete();
        // return redirect()->route('trainingcenter.index');

        $trainingcenter->delete();
        return response()->json($trainingcenter);
    }
}