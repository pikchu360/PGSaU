<center>
    <img src="/{{ $imagen->url }}" width="100px" height="70px">
</center><br>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Titulo:</label>
    <div class="col-md-6">
        {!! Form::text('title', $imagen->title, array('class'=>'form-control','required autofocus')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">Descripción:</label>
    <div class="col-md-6">
        {!! Form::text('description', $imagen->description, array('class'=>'form-control','required')) !!}
    </div>
</div>