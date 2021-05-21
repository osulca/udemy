@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registrar Compra</h1>
        <form method="post" action="{{route("guardar-compra")}}">
            @csrf
            <input type="text" class="form-control" name="fecha" value="{{old("fecha")}}" placeholder="ingrese fecha">
            @error("fecha")
            <br><span style="color: red">{{$message}}</span>
            @enderror
            <input type="text" class="form-control mt-2" name="descripcion" value="{{old("descripcion")}}" placeholder="ingrese descripcion">
            @error("descripcion")
            <br><span style="color: red">{{$message}}</span>
            @enderror
            <input type="submit" class="btn btn-primary mt-2" value="Guardar">
        </form>
    </div>
@endsection
