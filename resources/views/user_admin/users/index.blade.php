@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info">Usuarios</span></h1></center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Nuevo </a>
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
            <th>Email</th>
            <th>Tipo de Cuenta</th>
            <th width="240px">Acciones</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td> 
            <td>
                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $users->links() !!}
</div>
@endsection