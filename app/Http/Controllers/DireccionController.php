<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    public function guardar(Request $request){
        $request->validate([
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'residencia' => 'required',
        ]);

        $direccion = new Direccion();
        $direccion->region = $request->region;
        $direccion->provincia = $request->provincia;
        $direccion->distrito = $request->distrito;
        $direccion->residencia = $request->residencia;
        $direccion->id_usuario = Auth::id();
        $direccion->save();
        echo "Direccion Guardada";
    }

    public function getIdDireccion($id_usuario){
        return Direccion::where("id_usuario", $id_usuario)->first()->value("id");
    }
}
