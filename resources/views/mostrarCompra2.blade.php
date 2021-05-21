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
            @if(count($data)!=0)
                @foreach($data as $compra)
                    <tr>
                        <td>{{$compra["fecha"]}}</td>
                        <td>{{$compra["Descripcion"]}}</td>
                        <td>{{$compra["id"]}}</td>
                        <td>{{$compra["estado"]}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-info" colspan="4">No hay resultados que mostrar</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
