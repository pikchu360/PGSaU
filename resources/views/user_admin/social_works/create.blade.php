@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Nuevo O.Social</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('social_works.index') }}">Back</a>
            </div>
        </div>
    </div>
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
    {!! Form::open( ['method' => 'POST', 'route' => ['social_works.store']]) !!}
        @include('user_sanitary.social_works.form')
    {!! Form::close() !!}
@endsection