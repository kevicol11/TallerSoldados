<?php

namespace App\Http\Controllers;
use App\Models\Cuerpo;
use Illuminate\Http\Request;

class CuerpoController extends Controller
{
    function mostrar() {
        return view('Cuerpo');
    }
    function store(Request $request) {
        $cuerpo = new Cuerpo();
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();

        return $cuerpo;
    }
}
