@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center><h1><span class="badge badge-pill badge-info">Asistencia</span></h1></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('assists.create') }}"> Nuevo </a>
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
            <th>Email</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($assists as $assistance)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $assistance->lastname }}</td>
            <td>{{ $assistance->firstname }}</td>
            <td>{{ $assistance->email}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('assists.show',$assistance->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('assists.edit',$assistance->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['assists.destroy', $assistance->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $assists->links() !!}
@endsection