$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function cancelPurchase(Purchase_order_ID) {
    if (confirm('Bạn chắc chắn muốn hủy đơn hàng này không ?')) {
        $.ajax({
            type: 'POST',
            url: '/update-purchase',
            data: {
                'Purchase_order_ID': Purchase_order_ID,
                'method': 'Cancel'
            },
            dataType: "JSON",
            success: function (response) {
                if (response.success) {
                    $('#row_purchase_Order-' + Purchase_order_ID).hide();
                } else {
                    alert('Đang Có Sự Cố Kĩ Thuật Vui Lòng Thử Lại Sau...')
                }
            }

        });
    }

}
function updateDeliveryStatus(Purchase_order_ID) {
    $.ajax({
        type: 'POST',
        url: '/update-purchase',
        data: {
            'Purchase_order_ID': Purchase_order_ID,
            'method': 'Update Delivery Status'
        },
        dataType: "JSON",
        success: function (response) {
            if (response.success) {
                $('.Delivery-Status').text('Đã Giao Hàng');
            } else {
                alert('Cập nhật không thành công vui lòng thử lại sau ...')
            }
        }

    });
}
// function address from In4 Account
function updateAddressDefault(infoUserAddressId) {
    $.ajax({
        type: "POST",
        url: '/update-address-default',
        data : {
            'infoUserAddressId': infoUserAddressId
        },
        dataType: 'JSON',
        success: function(response){
            if(response.success){
                location.reload();
            }else{
                alert('Error updating address... Please try again later');
            }

        } 
    });
}
function removeAddress(infoUserAddressId) {
    $.ajax({
        type: "POST",
        url: '/delete-address',
        data : {
            'infoUserAddressId': infoUserAddressId
        },
        dataType: 'JSON',
        success: function(response){
            if(response.success){
                $(`#infoUserAddressUser_${infoUserAddressId}`).hide();
            }else{
                alert('Error updating address... Please try again later');
            }

        } 
    });
}
const handleinfoAccount = {
    toggleFromAddress: () => {
        const overlayElement = document.querySelector('#overlay');
        const btnShowFromAddress = document.querySelector('#btn-showFromAddress');
        const btnCloseFromAddress = document.querySelector('#bnt-closeFromAddress');
        const fromAddress = document.querySelector('#fromAddress');
        
        if (btnShowFromAddress) {
            btnShowFromAddress.onclick = () =>{
                
                overlayElement.classList.remove('hidden');
                fromAddress.classList.remove('hidden');
            }
            btnCloseFromAddress.onclick = () =>{
                overlayElement.classList.add('hidden');
                fromAddress.classList.add('hidden');
            }
        }
    },
    start: function () {
        this.toggleFromAddress();
    }
}
handleinfoAccount.start();