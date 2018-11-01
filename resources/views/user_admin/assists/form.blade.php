<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo:</strong>
            {!! Form::text('name', null, array('placeholder'=>'Titulo','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion:</strong>
            {!! Form::text('description', null, array('placeholder'=>'Descripcion','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha:</strong>
            {!! Form::text('turn_date', null, array('placeholder'=>'Fecha y Hora','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success">Aceptar</button>
    </div>
</div>