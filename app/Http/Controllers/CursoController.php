<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\VentaController;

class CursoController extends Controller
{
    public static function mostrar(){
        $resultado = DB::table('allcursos')->get();
        return view('bienvenido', ["cursos"=>$resultado]);
    }

    public static function comprado($idCurso): bool{
        $resultado = VentaController::existeVenta($idCurso);
        if($resultado!=0){
            return true;
        }else{
            return false;
        }
    }

    public function mostrarCurso(){
        return view('curso.crear');
    }

    public function guardarCurso(Request $request){
        $nombre = $request->file('imagen')->getClientOriginalName();
        $ruta = $request->file('imagen')->storeAs('public/image',$nombre);

        $curso = new Curso();
        $curso->nombre = $request->get("nombre");
        $curso->precio = $request->get("precio");
        $curso->imagen = $ruta;
        $curso->id_Autor = ProfesorController::idProfesor();
        $curso->save();

        return redirect(route('home'));
    }
}
