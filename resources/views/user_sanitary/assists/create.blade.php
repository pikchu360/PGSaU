@extends('home')
@section('content')
<div class="card bg-home" style="width: 25rem; background-color: #d5f5e3 ;">
    <div class="card-header bg-success">
        <center><h1><span class="text-white icon-user">Solicitud de Licencia</span></h1></center>
    </div>
    <div class="card-body">
        {!! Form::open( ['method' => 'POST', 'route' =>['assists.store']]) !!}
            @include('user_admin.assists.form')
            <div class="float-right">
                <a class="btn btn-secondary icon-cancel" href="{{ route('assists.index') }}">Cancelar</a>
                <button class="btn btn-success icon-checkmark" type="submit">Aceptar</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection