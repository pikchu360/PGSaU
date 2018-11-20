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
            @foreach ($pat as $paty)
                @if ($paty->id == $assistance->patient_id)
                    <td>{{ $paty->dni }} </td>        
                    <td>{{ $paty->lastname }} </td>
                    <td>{{ $paty->firstname }} </td>
                @endif
            @endforeach
            @foreach ($lic as $lics)
                @if ($lics->id == $assistance->license_id)
                    <td>{{ $lics->name }} </td>
                @endif
            @endforeach
            <td>
                <a class="btn btn-info" href="{{ route('assists.show',$assistance->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('assists.edit',$assistance->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['assists.destroy', $assistance->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $assists->links() !!}
    @include('user_admin.assists.search_patient')
</div>
@endsection