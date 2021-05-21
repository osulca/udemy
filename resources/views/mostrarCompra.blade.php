@php
    use App\Http\Controllers\SeguimientoController;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mis Compras</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Id Seguimiento</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $compra)
                <tr>
                    <td>{{$compra["fecha"]}}</td>
                    <td>{{$compra["Descripcion"]}}</td>
                    @php
                        $id_compra = $compra["id"];
                        $seguimientoController = new SeguimientoController();
                        $seguimientos = $seguimientoController->mostrarPorCompra($id_compra);
                    @endphp
                    @if(!empty($seguimientos))
                        @foreach($seguimientos as $seguimiento)
                            <td>{{$seguimiento["id"]}}</td>
                            <td>{{$seguimiento["estado"]}}</td>
                        @endforeach
                    @else
                        <td>sin datos</td>
                        <td>sin datos</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
