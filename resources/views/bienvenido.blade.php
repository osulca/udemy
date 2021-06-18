@extends('layouts.udemy')

@section('contenido')
    <h1>Cursos Disponibles</h1>
    <div class="row">
        @foreach($cursos as $curso)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($curso->imagen)}}" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curso->nombre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $curso->autor }}</h6>
                            <a href="#" class="btn btn-primary">S/ {{ $curso->precio }}</a>
                            @auth
                                @if(\App\Http\Controllers\CursoController::comprado($curso->id))
                                    <a href="" class="btn btn-primary">ver videos</a>
                                @else
                                    <a href="" class="btn btn-primary">comprar</a>
                                @endif
                            @else
                                <a href="" class="btn btn-primary">registrarse</a>
                            @endauth
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection

