    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            {!! Form::text('name', null, array('class'=>'form-control','required autofocus')) !!}
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            {!! Form::text('email', null, array('type'=>'email', 'placeholder'=>'example@gmail.com','class'=>'form-control', 'required')) !!}
            
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            {!! Form::text('password', null, array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'temporal password', 'required')) !!}
        </div>
    </div>
    <div class="form-group row">
        <label for="role" class="col-md-4 col-form-label text-md-right">Tipo de Usuario:</label>
        <div class="col-md-6">
            {!! Form::select('role', array_pluck($roles, 'description', 'name')) !!}
        </div>
    </div>
