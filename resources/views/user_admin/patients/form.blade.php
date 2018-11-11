<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            {!! Form::text('lastname', null, array('placeholder'=>'Apellido','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('firstname', null, array('placeholder'=>'Nombre','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>N°DNI:</strong>
            {!! Form::text('dni', null, array('placeholder'=>'DNI','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder'=>'Email','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Direccion:</strong>
            {!! Form::text('address', null, array('placeholder'=>'Dirección','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefono:</strong>
            {!! Form::text('phone', null, array('placeholder'=>'Tel/Cel','class'=>'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>