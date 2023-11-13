$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function removeRow(id, url) {
    if(confirm('Bạn chắc chắn muốn xóa danh mục này và không thể khôi phục ?')){
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function (response) {
                if (response.success) {
                    alert('Xóa thành công ... !');
                    location.reload();
                } else {
                    alert('Đã có lỗi xảy ra vui lòng thử lại sau  ... !');
                }
            }
        });
    }
    
}