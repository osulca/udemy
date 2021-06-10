<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\This;

class ProfesorController extends Controller
{
    public function guardar(){
        $profesor = new Profesor();
        $profesor->id_usuario = Auth::id();
        $profesor->save();
        return redirect(route("home"));
    }

    public static function existe(){
        $profesor = new Profesor();
        $respuesta = false;
        $resultados = $profesor->where("id_Usuario", Auth::id())->get();
        if(count($resultados)>0){
            $respuesta = true;
        }
        return $respuesta;
    }

    public function ventas(){
        if($this::existe()) {
            return view('profesor.ventas');
        }else{
            return redirect(\route('home'));
        }
    }
}
