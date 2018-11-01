@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Obras Sociales</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('social_works.create') }}"> Nuevo </a>
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
            <th>Nombre</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($sworks as $osocial)
        <tr>
            <td>{{ $osocial->id }}</td>
            <td>{{ $osocial->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('social_works.show',$osocial->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('social_works.edit',$osocial->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['social_works.destroy', $osocial->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $sworks->links() !!}
</div>
@endsection