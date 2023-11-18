$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#avatarUpload').change(function() {
    var formData = new FormData();
    formData.append('image', $(this)[0].files[0]);
    $.ajax({
        url: "/admin/upload",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if(response.success){
                var urlImage = response.url;
                $('#avatarUploadProfile').attr('src', urlImage);
                $('#newAvatar').val(urlImage);
            }else{
                alert('Upload failed');
            }
        }
    });
});
$('#categoryProductAvatar').change(function() {
    var formData = new FormData();
    formData.append('image', $(this)[0].files[0]);
    $.ajax({
        url: "/admin/upload",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if(response.success){
                var urlImage = response.url;
                $('#viewCategoryProductAvatar').attr('src', urlImage);
                $('#urlCategoryProductAvatar').val(urlImage);
            }else{
                alert('Upload failed');
            }
        }
    });
});