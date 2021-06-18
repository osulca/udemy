@extends('layouts.udemy')

@section('contenido')
    <h1>Crear Curso</h1>
    <form method="post" action="{{ route('subir-curso') }}" enctype="multipart/form-data">
        @csrf
        <input class="form-control mb-2" type="text" name="nombre" placeholder="nombre del curso">
        <input class="form-control mb-2" type="text" name="precio" placeholder="precio">
        <input class="form-control mb-2" type="file" name="imagen">
        <input class="btn btn-danger" type="submit" name="submit" value="subir">
    </form>
@endsection
