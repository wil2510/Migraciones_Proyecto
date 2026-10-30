<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use Cloudinary\Cloudinary;

class AreaController extends Controller
{
    public function index(){

        // $areas = Area::all();

        // return view('area.index',compact('areas'));

        $areas = Area::all();
        return response()->json($areas);

    }

    public function admin(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // $areas = Area::create($request->all());

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
                'folder' => 'areas',
                'resource_type' => 'image',
            ]
        );

        $areas = Area::create([
            'name' => $request->name,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Area creada correctamente',
            'data' => $areas,
        ], 201);

        // $areas = Area::create($request->all());
        // return response()->json($areas);

    }

    public function show ($id){

        $areas = Area::findOrFail($id);
        return response()->json($areas);

        // $area=Area::find($id);
        // return view('area.show',compact('area'));
        
    }

    public function update(Request $request, Area $area){

        // $area->update($request -> all());

        // return redirect()->route('area.index');

        $area->update($request->all());

        return response()->json($area);

    }

    public function destroy(Area $area)
    {
        // $area->delete();
        // return redirect()->route('area.index');

        $area->delete();
        return response()->json($area);
    }
}