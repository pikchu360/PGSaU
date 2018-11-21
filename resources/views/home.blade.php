@extends('layouts.app')
@section('content')
<style>
    .bg-home {
        /*background:  #85c1e9;
        border-color: black;*/
        background-image: url('../images/background/bg-body4.jpg');
    }

    .title {
        color: white;
        font-size: 50px;
    }

</style>
<div class="card bg-home">
    <div class="card-header">
        <h3 class="title" align="center">
            Bienvenido
        </h3>
    </div>
    <div class="card-body bg-opacity-off">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="slider">
            @include('slider.slider',array('slides'=>DB::table('images')->get()))
        </div>
        <br>
    </div>
    <div class="card-footer bg-dark">        
        @if (Auth::user()->hasRole('admin'))
        <center>
            <a class="btn btn-warning text-white" href="{{ route('imagenes.index') }}">Administrar Imagenes</a>
        </center>
        @endif
    </div>
    @include('new')
</div>
@endsection
