@extends('home')
@section('content')
<div class="card bg-home" style="width: 35rem; background-color: #d5f5e3 ; ">
    <div class="card-header bg-success">
            <center><h1><span class="text-white icon-profile">Editar Ficha</span></h1></center>
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
        {!! Form::model($patient,['method'=>'PATCH','route'=>['patients.update', $patient->id]]) !!}
            @include('user_admin.patients.form')
            <div class="float-right">
                <a class="btn btn-secondary icon-cancel" href="{{ route('patients.index') }}">Cancelar</a>
                <button class="btn btn-success icon-checkmark" type="submit">Actualizar</button>
            </div>   
        {!! Form::close() !!}
    </div>
</div>
@endsection

<!--div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Ficha Médica</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
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
                <form class="form-horizontal" role="modal">  
                    <div class="form-group">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
                        <input id="i_lastname" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                        <input id="i_firstname" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="dni" class="col-md-4 col-form-label text-md-right">DNI:</label>
                        <input id="i_dni" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                        <input id="i_email" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Dirección:</label>
                        <input id="i_address" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono:</label>
                        <input id="i_phone" class="col-md-6">
                    </div>                           
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary icon-cancel" data-dismiss="modal">
                    <span class="glyphicon glyphicon">Cancelar</span>
                </button>
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer_action_button" class="icon-checkmark"></span>
                </button>   
            </div>
        </div>
    </div>
</div-->