<?php

namespace App\Http\Controllers;
use App\Models\soidier;
use Illuminate\Http\Request;

class SoidierController extends Controller
{
    
    function mostrar() {
        return view('soidier');
    }
    function store(Request $request) {
        $soidier = new  soidier();
        $soidier->nombres = $request->nombres;
        $soidier->apellidos = $request->apellidos;
        $soidier->grado = $request->grado;
        $soidier->save();

        return $soidier;
    }
}
