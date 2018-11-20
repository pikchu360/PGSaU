@extends('home')
@section('content')
<div class="card bg-home" style="width: 25rem; background-color: #d5f5e3 ;">
    <div class="card-header bg-success">
        <center><h1><span class="text-white icon-user">Editar Usuario</span></h1></center>
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
    {!! Form::model($user,['method'=>'PATCH','route'=>['users.update', $user->id]]) !!}
        @include('user_admin.users.form')
    </div>
    <div class="card-footer bg-dark">
        <div class="float-right">
            <a class="btn btn-secondary icon-cancel" href="{{ route('users.index') }}">Cancelar</a>
            <button class="btn btn-success icon-checkmark" type="submit">Actualizar</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection