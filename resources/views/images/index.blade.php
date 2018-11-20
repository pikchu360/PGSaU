@extends('home')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center"> Mis Imagenes </h2>
        </div>      
    </div>
</div>
<br>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
    <div class="container-fluid">
        <table class="table table-bordered">
        <tr>
            <th>URL</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($imagen as $image)
        <tr>
            <td>{{$image->url}}</td>
            <td>{{$image->titulos}}</td>
            <td>{{$image->descripcion}}</td>
            <td> <div class="col-sm-6 col-md-3">
                <a href="{{$image->url}}" class="thumbnail">
                    <img src="{{$image->url}}" alt="..." width="100px" height="100px">
                </a>
                </div>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('imagenes.edit',$image->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['imagenes.destroy',$image->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
        @endforeach
        </table>
    </div>
    <div class="pull-right">
        @include('new')  
    </div>
@endsection
  