<div class="form-group row">
    <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
    <div class="col-md-6">
        {!! Form::text('lastname', null, array('name'=>'lastname', 'id'=>'lastname', 'class'=>'form-control','required autofocus')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombres:</label>
    <div class="col-md-6">
        {!! Form::text('firstname', null, array('name'=>'firstname', 'id'=>'firstname', 'class'=>'form-control','required')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="dni" class="col-md-4 col-form-label text-md-right">DNI:</label>
    <div class="col-md-6">
        {!! Form::text('dni', null, array('name'=>'dni', 'id'=>'dni', 'class'=>'form-control','required')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
    <div class="col-md-6">
        {!! Form::text('email', null, array('name'=>'email', 'id'=>'email', 'type'=>'email', 'class'=>'form-control','required')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="address" class="col-md-4 col-form-label text-md-right">Dirección:</label>
    <div class="col-md-6">
        {!! Form::text('address', null, array('name'=>'address', 'id'=>'address', 'class'=>'form-control','required')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono:</label>
    <div class="col-md-6">
        {!! Form::text('phone', null, array('name'=>'phone', 'id'=>'phone', 'class'=>'form-control','required')) !!}
    </div>
</div>