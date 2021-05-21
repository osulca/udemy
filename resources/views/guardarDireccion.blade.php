@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Registrar Dirección</h1>
    <form method="post" action="/guardar-direccion">
        @csrf
        <input type="text" name="region" class="form-control mt-2" value="{{old("region")}}"placeholder="ingrese region">
        @error("region")
            <br><span style="color: red">{{$message}}</span>
        @enderror
        <input type="text" name="provincia" class="form-control mt-2" value="{{old("provincia")}}" placeholder="ingrese provincia">
        @error("provincia")
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <input type="text" name="distrito" class="form-control mt-2" value="{{old("distrito")}}" placeholder="ingrese distrito">
        @error("distrito")
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <input type="text" name="residencia" class="form-control mt-2" value="{{old("residencia")}}" placeholder="ingrese direccion">
        @error("residencia")
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br><input type="submit" class="btn btn-primary mt-2" value="Guardar">
    </form>
    </div>
@endsection
