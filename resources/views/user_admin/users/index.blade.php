@extends('home')
@section('content')
<div class="card bg-home" style="width: 100rem; background-color: #d5f5e3 ; ">
    <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <center><h1><span class="badge badge-pill badge-info icon-users">Usuarios</span></h1></center>
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
            <th>Email</th>
            <th>Tipo de Cuenta</th>
            <th width="240px">Acciones
                <a class="btn btn-warning icon-plus" data-toggle="modal" data-target="#add-user-modal"></a>
            </th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td> 
            <td>
                <a href=# class="show-modal btn btn-primary btn-sm" 
                    data-id         = "{{ $user->id }}" 
                    data-role       = "{{ $user->role }}"
                    data-name       = "{{ $user->name }}"
                    data-email      = "{{ $user->email }}"
                    data-password   = "{{ $user->password }}"
                ><i class="icon-eye"></i></a>
                <a class="btn btn-success btn-sm" href="{{ route('users.edit',$user->id) }}">
                    <i class="icon-pencil1"></i>
                </a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-danger icon-trashcan"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $users->links() !!}
    @include('user_admin.users.create')
    @include('user_admin.users.show')
</div>
@endsection