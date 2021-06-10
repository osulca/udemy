<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{

    public function ventasPorUsuario(){
        $ventas = new Venta();
        $resultados = $ventas::where('ventas.idCliente',Auth::id())
                            ->join('cursos', 'ventas.idCurso','=','cursos.id')
                            ->join('profesors','profesors.id','=','cursos.id_Autor')
                            ->join('users', 'users.id','=','profesors.id_Usuario')
                            ->get();
        return view("cliente.compras", ['resultados'=>$resultados]);
    }
}
