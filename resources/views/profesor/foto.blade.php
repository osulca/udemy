@extends('layouts.udemy')
@section('contenido')
    <h1>Subir Foto</h1>
    <form method="post" action="{{ route('subir') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="archivo">
        <input type="submit" name="submit" value="subir">
    </form>
@endsection
