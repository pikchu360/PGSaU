@extends('home')
@section('content')
<div class="card bg-home" style="width: 100rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info icon-list">Tipos de Licencias</span></h1></center>
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
            <th>Nro</th>
            <th>Licencia</th>
            <th>Descripción</th>
            <th>Cantidad de días</th>
            <th width="230px">Acciones
                <a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#addModal"></a>
            </th>
        </tr>
        @foreach ($lic as $tlic)
        <tr class="license{{$tlic->id}}">
            <td>{{ ++$i }}</td>
            <td>{{ $tlic->name }}</td>
            <td>{{ $tlic->description }}</td>
            <td>{{ $tlic->days}}</td>
            <td>
                <a href=# class="show-modal btn btn-primary btn-sm" 
                    data-id             =   "{{ $tlic->id }}" 
                    data-name           =   "{{ $tlic->name }}"
                    data-description    =   "{{ $tlic->description }}"
                    data-days           =   "{{ $tlic->days }}"
                ><i class="icon-eye"></i></a>
                <a href="{{ route('licenses.edit', $tlic->id) }}" class="btn btn-success btn-sm"
                ><i class="icon-pencil1"></i></a>
                {!! Form::open(['method' => 'DELETE','route' => ['licenses.destroy', $tlic->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @include('user_admin.licenses.create')
    @include('user_admin.licenses.show')

    {!! $lic->links() !!}
</div>
@endsection