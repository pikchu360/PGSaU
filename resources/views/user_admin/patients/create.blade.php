<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Crear Ficha Médica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
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
                    
                @include('user_admin.patients.form')
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary icon-cancel" data-dismiss="modal"></button>
                <button type="submit" class="btn btn-success icon-checkmark"></button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>