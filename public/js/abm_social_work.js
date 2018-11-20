    // Show function
$(document).on('click', '.show-modal', function() {
    $('#show').modal('show');
    $('#p_name').text($(this).data('name'));
});