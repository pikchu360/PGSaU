<div class="modal fade" id="add-image-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Agregar Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
            <form method="POST" action="storage/createCert" accept-charset="UTF-8" enctype="multipart/form-data">            
                <div class="form-group">
                   <div class="col-md-6">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-form-label text-md-right">Archivo:</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
             </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary icon-cancel" data-dismiss="modal"></button>
                <button type="submit" class="btn btn-success icon-checkmark"></button>
            </div>
            </form>
        </div>
    </div>
</div>