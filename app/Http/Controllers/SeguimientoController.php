<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use App\Http\Controllers\DireccionController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeguimientoController extends Controller
{
    public function guardar($id_compra){
        $direccionController = new DireccionController();
        $seguimiento = new Seguimiento();
        $seguimiento->origen = "Indeterminado";
        $seguimiento->estado = "Pendiente";
        $seguimiento->destino = $direccionController->getIdDireccion(Auth::id());
        $seguimiento->id_compra = $id_compra;
        $seguimiento->save();
        return $seguimiento->id;
    }

    public function mostrarPorCompra(int $id){
        $seguimiento = new Seguimiento();
        return $seguimiento::where("id_compra", $id)->get();
    }
}
