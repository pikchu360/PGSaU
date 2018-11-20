// Show function
$(document).on('click', '.show-modal', function() {
    $('#show').modal('show');
    $('#p_name').text($(this).data('name'));
    $('#p_description').text($(this).data('description'));
    $('#p_days').text($(this).data('days'));
});

// function Edit
/*$(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text("Actualizar");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('editLic');

    $('.deleteContent').hide();
    $('.form-horizontal').show();
   
    $('#i_id').val($(this).data('id')); 
    $('#i_name').val($(this).data('name'));
    $('#i_description').val($(this).data('description'));
    $('#i_days').val($(this).data('days'));

    $('#editLic').modal('show');
});

$('.modal-footer').on('click', '.editLic', function() {
    $.ajax({
        type: 'POST',
        url: 'editLicense',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#i_id").val(),
            'name': $('#i_name').val(),
            'description': $('#i_description').val(),
            'days': $('#i_days').val(),
        },
        success: function(datos){
            if(datos){
              location.href ="licenses";
            }
            else {
                location.href="http://www.youtube.com";
            }
        }
    });
});*/