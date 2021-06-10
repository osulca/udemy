@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Compras</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>Curso</td>
                    <td>Precio</td>
                    <td>Autor</td>
                    <td>&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                @foreach($resultados as $curso)
                    <tr>
                        <td>{{$curso["nombre"]}}</td>
                        <td>{{$curso["precio"]}}</td>
                        <td>{{$curso["name"]}}</td>
                        <td><button class="btn btn-primary">Ver Curso</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
