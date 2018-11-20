@extends('home')
@section('content')
<div class="card bg-home" style="width: 100rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center><h1><span class="badge badge-pill badge-info">Inasistencias</span></h1></center>
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
            <th>N° de DNI</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>Tipo de Licencia</th>
            <th width="280px">Acciones
                <a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#search-modal"></a>
            </th>
        </tr>
        @foreach ($assists as $assistance)
        <tr>  
            @foreach ($patient as $pat)
                @if ($pat->id == $assistance->patient_id)
                    <td>{{ $pat->dni }} </td>        
                    <td>{{ $pat->lastname }} </td>
                    <td>{{ $pat->firstname }} </td>
                @endif
            @endforeach
            @foreach ($license as $lic)
                @if ($lic->id == $assistance->license_id)
                    <td>{{ $lic->name }} </td>
                @endif
            @endforeach
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('assists.show',$assistance->id) }}">
                <i class="icon-eye"></i></a>
                <a href="{{ route('assists.edit', $assistance->id) }}" class="btn btn-success btn-sm">
                <i class="icon-pencil1"></i></a>
                {!! Form::open(['method' => 'DELETE','route' => ['assists.destroy', $assistance->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $assists->links() !!}
    @include('user_admin.assists.search_patient')
</div>
@endsection