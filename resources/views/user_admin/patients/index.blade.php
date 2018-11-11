@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info">Fichas</span></h1></center>
            </div>
            <div class="pull-right">
                <a href="" class="btn btn-success" data-toggle="modal" data-target="#addModal">Agregar</a>
                <!--a class="btn btn-success" href="{{ route('patients.create') }}"> Nuevo </a-->
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nro</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th width="230px">Acciones</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $patient->lastname }}</td>
            <td>{{ $patient->firstname }}</td>
            <td>{{ $patient->dni}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['patients.destroy', $patient->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @include('user_admin.modals.patient_modal_add')
    @include('user_admin.modals.patient_modal_info')

    {!! $patients->links() !!}
</div>
@endsection