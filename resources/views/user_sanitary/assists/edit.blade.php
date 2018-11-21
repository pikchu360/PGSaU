@extends('home')
@section('content')
<div class="card bg-home" style="width: 40rem; background-color: #d5f5e3 ;">
    <div class="card-header bg-success">
        <center><h1><span class="text-white icon-pencil1">Editar Licencia</span></h1></center>
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
    {!! Form::model($assistance,['method'=>'PATCH','route'=>['assists.update', $assistance->id]]) !!}    
        @include('user_admin.assists.form')
        <div class="form-group row">
            <label id="lic_because-" name="lic_because" class="col-md-4 col-form-label text-md-right">Licencia Actual:</label>
            <div class="col-md-6">
                <label id="lic_because" name="lic_because">{{ $license1->name }}</label>
            </div>
        </div>
    </div>
    <div class="card-footer bg-dark">
        <div class="float-right">
            <a class="btn btn-secondary icon-cancel" href="{{ route('assists.index') }}">Cancelar</a>
            <button class="btn btn-success icon-checkmark" type="submit">Actualizar</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection