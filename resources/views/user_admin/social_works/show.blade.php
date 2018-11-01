@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Obra Social</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('social_works.index') }}">Volver </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $social_work->id}}
            </div>
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $social_work->name}}
            </div>
        </div>
    </div>
</div>
@endsection