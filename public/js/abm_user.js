// Show function
$(document).on('click', '.show-modal', function() {
    $('#show').modal('show');
    $('#p_role').text($(this).data('role'));
    $('#p_name').text($(this).data('name'));
    $('#p_email').text($(this).data('email'));
});