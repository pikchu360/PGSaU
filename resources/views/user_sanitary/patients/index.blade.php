@extends('home')
@section('content')
<div class="card bg-home" style="width: 100rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info icon-folder-open">Fichas</span></h1></center>
            </div>
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
            <th>Apellido</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th width="230px">Acciones
                <a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#addModal"></a>
            </th>
        </tr>
        @foreach ($patients as $patient)
        <tr class="patients{{$patient->id}}">
            <td>{{ ++$i }}</td>
            <td>{{ $patient->lastname }}</td>
            <td>{{ $patient->firstname }}</td>
            <td>{{ $patient->dni}}</td>
            <td>
                <a href=# class="show-modal btn btn-primary btn-sm" 
                    data-id         =   "{{ $patient->id }}" 
                    data-lastname   =   "{{ $patient->lastname }}"
                    data-firstname  =   "{{ $patient->firstname }}"
                    data-dni        =   "{{ $patient->dni }}"
                    data-email      =   "{{ $patient->email }}"
                    data-address    =   "{{ $patient->address }}"
                    data-phone      =   "{{ $patient->phone }}"
                ><i class="icon-eye"></i></a>
                <a class="btn btn-success btn-sm" href="{{ route('patients.edit',$patient->id) }}">
                    <i class="icon-pencil1"></i>
                </a>
                {!! Form::open(['method' => 'DELETE','route' => ['patients.destroy', $patient->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @include('user_admin.patients.create')
    @include('user_admin.patients.show')

    {!! $patients->links() !!}
</div>
@endsection