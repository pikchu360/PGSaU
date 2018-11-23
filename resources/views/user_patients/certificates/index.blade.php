@extends('home')
@section('content')
<div class="card bg-home" style="width: 60rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info icon-images">Administración de Imagenes</span></h1></center>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <table class="card-body table table-bordered">
        <tr>
            <th>URL</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th width="280px">Acciones
                <a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#add-image-modal"></a>
            </th>
        </tr>
        @foreach ($imagen as $image)
        <tr>
            <td>{{$image->url}}</td>
            <td>{{$image->title}}</td>
            <td>{{$image->description}}</td>
            <td> <div class="col-sm-6 col-md-3">
                <a href="{{$image->url}}" class="thumbnail">
                    <img src="{{$image->url}}" alt="..." width="100px" height="70px">
                </a>
                </div>
            </td>
            <td>
                <a href="{{ route('imagenes.edit',$image->id) }}" class="btn btn-success btn-sm"
                ><i class="icon-pencil1"></i></a>
                {!! Form::open(['method' => 'DELETE','route' => ['imagenes.destroy',$image->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        <div class="pull-right">
            @include('new')  
        </div>
</div>
@endsection