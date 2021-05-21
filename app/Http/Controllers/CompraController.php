<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SeguimientoController;

class CompraController extends Controller
{
    public function guardar(Request $request){
        $compra = new Compra();
        $compra->fecha = $request->fecha;
        $compra->Descripcion = $request->descripcion;
        $compra->id_usuario = Auth::id();
        $compra->save();
        $id = $compra->id;
        $seguimientoController =  new SeguimientoController();
        $nro_seguimiento = $seguimientoController->guardar($id);
        echo "Compra Guardada: su numero de seguimiento es: $nro_seguimiento";
    }

    public function mostrarPorUsuario(){
        $compra = new Compra();
        $data = $compra::where("id_usuario", Auth::id())->get();
        return view("mostrarCompra", ["data"=>$data]);
    }

    public function mostrarPorUsuario2(){
        $compra = new Compra();
        $data = $compra::select("compras.fecha","compras.Descripcion","seguimientos.id","seguimientos.estado")
                        ->join("seguimientos", "compras.id","=","seguimientos.id_compra")
                        ->where("compras.id_usuario", Auth::id())
                        ->get();
        return view("mostrarCompra2", ["data"=>$data]);
    }
}
