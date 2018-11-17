// Show function
$(document).on('click', '.show-modal', function() {
    $('#show').modal('show');
    $('#p_lastname').text($(this).data('lastname'));
    $('#p_firstname').text($(this).data('firstname'));
    $('#p_dni').text($(this).data('dni'));
    $('#p_email').text($(this).data('email'));
    $('#p_address').text($(this).data('address'));
    $('#p_phone').text($(this).data('phone'));
    //$('.modal-title').text('Show Post');
});


// function Edit
$(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text("Actualizar");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    //$('.modal-title').text('Post Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
   
    $('#i_id').val($(this).data('id')); 
    $('#i_lastname').val($(this).data('lastname'));
    $('#i_firstname').val($(this).data('firstname'));
    $('#i_dni').val($(this).data('dni'));
    $('#i_email').val($(this).data('email'));
    $('#i_address').val($(this).data('address'));
    $('#i_phone').val($(this).data('phone'));
    $('#b_id').text($(this).data('id'));
    $('#edit').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'POST',
        url: 'editPatient',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#i_id").val(),
            'lastname': $('#i_lastname').val(),
            'firstname': $('#i_firstname').val(),
            'dni': $('#i_dni').val(),
            'email': $('#i_email').val(),
            'address': $('#i_address').val(),
            'phone': $('#i_phone').val(),
        },
        success: function(datos){
            if(datos){
              location.href ="patients";
            }
            else {
                location.href="http://www.youtube.com";
            }
        }
            /*function(data) {
            $('.patients' + data.id).replaceWith(" "+
                "<tr class='patients" + data.id + "'>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.lastname + "</td>"+
                    "<td>" + data.firstname + "</td>"+
                    "<td>" + data.dni + "</td>"+
                    "<td>" +
                        "<a href='#' class='show-modal btn btn-info btn-sm"+
                            "  data-id          ='" + data.id + 
                            "' data-lastname    ='" + data.lastname + 
                            "' data-firstname   ='" + data.firstname +
                            "' data-dni         ='" + data.dni +
                            "' data-email       ='" + data.email +
                            "' data-address     ='" + data.address +
                            "' data-phone       ='" + data.phone + 
                            "'><span class='icon-eye'></span>"+
                        "</a>"+
                        "<a href='#' class='edit-modal btn btn-primary btn-sm"+
                            "  data-id          ='" + data.id + 
                            "' data-lastname    ='" + data.lastname + 
                            "' data-firstname   ='" + data.firstname +
                            "' data-dni         ='" + data.dni +
                            "' data-email       ='" + data.email +
                            "' data-address     ='" + data.address +
                            "' data-phone       ='" + data.phone + 
                            "'><i class='icon-pencil1'></i></span>"+
                        "</a>"+
                    "</td>"+
                "</tr>");
        }*/
    });
});