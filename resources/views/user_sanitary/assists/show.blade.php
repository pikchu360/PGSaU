@extends('home')
@section('content')
<div class="card bg-home" style="width: 40rem; background-color: #d5f5e3 ;">
    <div class="card-header bg-primary">
        <center><h1><span class="text-white icon-user">Solicitud</span></h1></center>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
            <div class="col-md-6">
                <label id="lastname" class="form-control">{{ $patient->lastname }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombre:</label>
            <div class="col-md-6">
                <label id="firstname" class="form-control">{{ $patient->firstname }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="dni" class="col-md-4 col-form-label text-md-right">N° de DNI:</label>
            <div class="col-md-6">
                <label for="dni" class="form-control">{{ $patient->dni }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="tlic" class="col-md-4 col-form-label text-md-right">Tipo de Licencia:</label>
            <div class="col-md-6">
                <label for="tlic" class="form-control">{{ $license->name }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Fecha Inicial:</label>
            <div class="col-md-6">
                <label class="form-control" >{{ $assistance->start_date }}</label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Fecha Final:</label>
            <div class="col-md-6">
                <label class="form-control" >{{ $assistance->end_date }}</label>
            </div>
        </div>
    </div>
    <div class="card-footer bg-dark">
        <div class="float-right">
            <a class="btn btn-primary icon-arrow-left" href="{{route('assists.index')}}">volver</a>
        </div>
    </div>
</div>
@endsection