<div class="form-group">
    <strong>Email:</strong>
    {!! Form::text('email', null, array('placeholder'=>'Email','class'=>'form-control')) !!}
</div>
<div class="form-group">
    <strong>Tipo de Usuario:</strong>
    {!! Form::select('role', array_pluck($roles, 'description', 'name')) !!}
</div>