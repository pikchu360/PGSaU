@extends('home')
@section('content')
<div class="card bg-home" style="width: 35rem; background-color: #d5f5e3 ; ">
    <div class="card-header bg-primary">
            <center><h1><span class="text-white icon-calendar1">Turno</span></h1></center>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="card-body">
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
     </div>
     <div class="card-footer bg-dark">
        <div class="float-right">
            <a class="btn btn-primary icon-arrow-left" href="{{ route('turns.index') }}"></a>
            <a class="btn btn-success icon-pencil1" href="{{ route('turns.edit',$turn->id) }}"></a>
            {!! Form::open(['method' => 'DELETE','route' => ['turns.destroy', $turn->id],'style'=>'display:inline']) !!}
            <button type="submit" class="btn btn-danger icon-trashcan"></button>
            {!! Form::close() !!}
        </div>   
     </div>
</div>
@endsection