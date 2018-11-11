@extends('home')
@section('content') 
    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open( ['method' => 'POST', 'route' => ['users.store']]) !!}
        <center><h2>Agregar Usuario Nuevo</h2></center>
        @include('user_admin.users.form_register')
    {!! Form::close() !!}
@endsection