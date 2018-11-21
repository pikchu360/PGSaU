@extends('home')
@section('content')
<div class="card bg-home" style="width: 50rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
    <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info icon-svg">Obras Sociales</span></h1></center>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    <table class="card-body table table-bordered">
        <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th width="130px">Acciones
            <!--a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#add-socialw-modal"></a-->
            </th>
        </tr>
        @foreach ($sworks as $osocial)
        <tr>
            <td>{{ $osocial->id }}</td>
            <td>{{ $osocial->name }}</td>
            <td>
            <a href=# class="show-modal btn btn-primary btn-sm" 
                    data-id     =  "{{ $osocial->id }}" 
                    data-name   =  "{{ $osocial->name }}"
                ><i class="icon-eye"></i></a>
                <!--a href="{{ route('social_works.edit', $osocial->id) }}" class="btn btn-success btn-sm"
                ><i class="icon-pencil1"></i></a>
                {!! Form::open(['method' => 'DELETE','route' => ['social_works.destroy', $osocial->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}-->
            </td>
        </tr>
        @endforeach
    </table>
    {!! $sworks->links() !!}
    @include('user_admin.social_works.show')
    @include('user_admin.social_works.create')
</div>
@endsection