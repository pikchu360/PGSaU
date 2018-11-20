<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Lic.:</label>
    <div class="col-md-6">
        {!! Form::text('name', null, array('name'=>'name', 'id'=>'name', 'class'=>'form-control','required autofocus')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">Descripción:</label>
    <div class="col-md-6">
        {!! Form::text('description', null, array('name'=>'description', 'id'=>'description', 'class'=>'form-control','required')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="days" class="col-md-4 col-form-label text-md-right">Días posible duracción:</label>
    <div class="col-md-6">
        {!! Form::text('days', null, array('name'=>'days', 'id'=>'days', 'class'=>'form-control','required')) !!}
    </div>
</div>