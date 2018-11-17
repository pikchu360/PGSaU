<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ficha Médica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="form-horizontal" role="modal">  
                 <!-- {!! Form::model($patient,['method'=>'PATCH','route'=>['patients.update', $patient->id]]) !!} -->
                    <label for=""> 
                        {{ $patient->id }} <br>
                        <input id="i_id" disabled>
                        <b id="b_id"></b>
                    </label>
                    <div class="form-group">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
                        <input id="i_lastname" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                        <input id="i_firstname" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="dni" class="col-md-4 col-form-label text-md-right">DNI:</label>
                        <input id="i_dni" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                        <input id="i_email" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Dirección:</label>
                        <input id="i_address" class="col-md-6">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono:</label>
                        <input id="i_phone" class="col-md-6">
                    </div>                           
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" href="google.com">Aceptar</button>
                <!--button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class="glyphicon glyphicon"></span>Cancelar
                </button-->
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer_action_button" class="glyphicon"></span>
                </button>   
            </div>
            <!-- {!! Form::close() !!} -->
        </div>
    </div>
</div>