@extends('layouts.app')
@section('content')
<style>
    .bg-home {
        background:  #85c1e9;
        border-color: black;
    }

    .title {
        color: white;
        font-size: 50px;
    }

</style>
<!--div class="container">
    <div class="row justify-content-center"-->
        <div class="card bg-home">
            <div class="card-header">
                <h3 class="title" align="center">
                    Bienvenido
                </h3>
            </div>
            <div class="card-body bg-opacity-off">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="slider">
                    @include('slider.slider',array('slides'=>DB::table('images_slider')->where('users_id','=',Auth::id())->get()))
                </div>
            </div>
        <!--/div>
    </div-->
</div>
@endsection
