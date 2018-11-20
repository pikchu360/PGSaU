@extends('home')
@section('content') 
<div class="card bg-home" style="width: 35rem; background-color: #d5f5e3 ; ">
    <div class="card-header bg-success" >
        <center><h1><span class="text-white icon-user">Crear Usuario</span></h1></center>
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
    </div>
    <div class="card-body">
    {!! Form::open( ['method' => 'POST', 'route' => ['users.store']]) !!}
        @include('user_admin.users.form_register')
    {!! Form::close() !!}  
    </div>
</div>
@endsection