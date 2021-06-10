@php
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\ProfesorController;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{Auth::user()->name}}<br>
                    @if(\App\Http\Controllers\ProfesorController::existe() == false)
                        <a href="/registro-profesor">Quiero ser profesor</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
