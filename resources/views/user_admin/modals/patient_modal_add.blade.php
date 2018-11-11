<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Ficha Médica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--{!! Form::open(['Method'=>'POST', 'class'=>'form-inline ']) !!}
                    <input id="txtDNI" name="txtDNI" class="form-control mr-sm-2" type="search" placeholder="Ingrese DNI" aria-label="Search">
                    <a href="" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#userModal" data-dismiss="modal" onclick="showDNI()">Buscar</a>
                {!! Form::close() !!}-->

                <script>
                    function validar(e){
                        tecla = (document.all) ? e.keyCode : e.which;

                        //Tecla de retroceso para borrar, siempre la permite
                        if (tecla==8){
                            return true;
                        }
                            
                        // Patron de entrada, en este caso solo acepta numeros
                        patron =/[0-9]/;
                        tecla_final = String.fromCharCode(tecla);
                        return patron.test(tecla_final);
                    }
                </script>

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
                {!! Form::open( ['method' => 'POST', 'route' => ['patients.store']]) !!}
                    
                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
                        <div class="col-md-6">
                            {!! Form::text('lastname', null, array('class'=>'form-control','required autofocus')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombres:</label>
                        <div class="col-md-6">
                            {!! Form::text('firstname', null, array('class'=>'form-control','required')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dni" class="col-md-4 col-form-label text-md-right">DNI:</label>
                        <div class="col-md-6">
                            {!! Form::text('dni', null, array('class'=>'form-control','required')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                        <div class="col-md-6">
                            {!! Form::text('email', null, array('type'=>'email', 'class'=>'form-control','required')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Dirección:</label>
                        <div class="col-md-6">
                            {!! Form::text('address', null, array('class'=>'form-control','required')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono:</label>
                        <div class="col-md-6">
                            {!! Form::text('phone', null, array('class'=>'form-control','required')) !!}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Crear</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>