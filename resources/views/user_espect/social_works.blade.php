@extends('user_espect.index')
@section('content')
<div class="card bg-home" style="width: 35rem; background-color: #d5f5e3 ; ">
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
            <th >Nombre</th>
            <th width="100px">Acciones
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
            </td>
        </tr>
        @endforeach
    </table>
    {!! $sworks->links() !!}
    @include('user_admin.social_works.show')
    @include('user_admin.social_works.create')
</div>
@endsection