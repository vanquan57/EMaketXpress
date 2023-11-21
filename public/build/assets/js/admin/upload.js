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
        // url: "/admin/profile/upload",
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

$('#avatarUpload1').change(function() {
    var formData = new FormData();
    for (var i = 0; i < $(this)[0].files.length; i++) {
        formData.append('avatar[]', $(this)[0].files[i]);
    }
    $.ajax({
        url: "/admin/upload",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            if(response.success){
                var urlImage = response.urls;
                console.log(response);
                for (var j = 0; j < urlImage.length; j++) {
                    console.log('URL of Image ' + (j + 1) + ': ' + urlImage[j]);
                    var imgElement = $('<img class=" w-24 h-32">').attr({
                        'id': 'avatarUploadProfile' + (j + 1),
                        'src': urlImage[j]
                    });
                    $('#yourImageContainer').append(imgElement);
                }
            }else{
                alert('Upload failed');
            }
        }
    });
});




