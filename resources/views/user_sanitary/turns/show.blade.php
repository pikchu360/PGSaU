@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Evento </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('turns.index') }}">Volver </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $turn->name }}
            </div>
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $turn->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha:</strong>
                {{ $turn->turn_date }}
            </div>
        </div>
        <div class="">
            <a class="btn btn-primary" href="{{ route('turns.edit',$turn->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['turns.destroy', $turn->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection