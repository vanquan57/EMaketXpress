$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function removeRow(id, url) {
    $.ajax({
        type: 'DELETE',
        datatype: 'JSON',
        data: { id },
        url: url,
        success: function (response) {
            if (response.success) {

            } else {

            }
        }
    });
}