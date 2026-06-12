<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function create(){

        return view('computer.create');

    }

    public function category(Request $request){

    return $request;

    }
}
