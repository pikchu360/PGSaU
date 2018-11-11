@extends('home')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2> Paciente</h2></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="">
                            <strong>Apellido:</strong>
                            {{ $patient->lastname }}
                        </div>
                        <div class="">
                            <strong>Nombre:</strong>
                            {{ $patient->firstname }}
                        </div>
                        <div class="">
                            <strong>Email:</strong>
                            {{ $patient->email}}
                        </div>
                        <div class="">
                            <strong>Telefono:</strong>
                            {{ $patient->phone }}
                        </div>
                        <div class="">
                            <strong>Dirección:</strong>
                            {{ $patient->address }}
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-primary" href="{{ route('patients.index') }}">Volver </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection