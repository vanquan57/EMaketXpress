
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getPromotion() {
    let promotionCode = document.querySelector('#promotionCode').value;
    let totalProductOrder = document.querySelector('#totalProductOrder').value;
    $.ajax({
        type: 'POST',
        url: '/get-value-promotion',
        data: {
            'promotionCode': promotionCode,
            'totalProductOrder': totalProductOrder
        },
        dataType: "JSON",
        success: function (response) {
            if (response.success && response.valuePromotion) {
                $('.group_overall_costs').append(`
                <div class="py-1 text-right flex items-center justify-between font-normal text-sm">
                    <span>Giảm Giá:</span>
                    <span>- ${number_format(response.valuePromotion, 0, '.', '.')} VNĐ</span>
                </div>`
                );
                $('#totalAmountAfter').text(`${number_format(totalProductOrder - response.valuePromotion, 0, '.', '.')} VNĐ`);
            } else {
                alert('Không có mã giảm giá nào trùng khớp...')
            }
        }

    });
}
function cancelPurchase(Purchase_order_ID){
    if(confirm('Bạn chắc chắn muốn hủy đơn hàng này không ?')){}
    $.ajax({
        type: 'POST',
        url: '/update-purchase',
        data: {
            'Purchase_order_ID': Purchase_order_ID,
            'method': 'Cancel'
        },
        dataType: "JSON",
        success: function (response) {
            if (response.success ) {
                $('#row_purchase_Order-'+Purchase_order_ID).hide();
            } else {
                alert('Không có mã giảm giá nào trùng khớp...')
            }
        }

    });
}
function updateDeliveryStatus(Purchase_order_ID){
    $.ajax({
        type: 'POST',
        url: '/update-purchase',
        data: {
            'Purchase_order_ID': Purchase_order_ID,
            'method': 'Update Delivery Status'
        },
        dataType: "JSON",
        success: function (response) {
            if (response.success ) {
                $('.Delivery-Status').text('Đã Giao Hàng');
            } else {
                alert('Không có mã giảm giá nào trùng khớp...')
            }
        }

    });
}

const verificationOrder = {
    getDistrict: () => {
        const groupAddressElement = document.querySelector('.group-address');
        if (groupAddressElement) {
            const cityElement = document.querySelector('#city');
            cityElement.onchange = () => {
                let cityCode = cityElement.options[cityElement.selectedIndex].getAttribute('cityCode');
                $.ajax({
                    type: "GET",
                    url: '/get-district-or-ward',
                    data: {
                        'type': 'district',
                        'cityCode': cityCode,
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.success == true) {
                            $('#district').empty();
                            let html = '';
                            response.districts.districts.forEach((district) => {
                                html += `<option value="${district.name}" districtCode="${district.code}">${district.name}</option>`
                            });
                            $('#district').append(html);
                        }
                    }
                });
            }
        }

    },
    getWard: () => {
        const groupAddressElement = document.querySelector('.group-address');
        if (groupAddressElement) {
            const districtElement = document.querySelector('#district');

            districtElement.onchange = () => {
                let districtCode = districtElement.options[districtElement.selectedIndex].getAttribute('districtCode');
                $.ajax({
                    type: "GET",
                    url: '/get-district-or-ward',
                    data: {
                        'type': 'ward',
                        'districtCode': districtCode,
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.success == true) {
                            $('#ward').empty();
                            let html = '';
                            response.wards.wards.forEach((ward) => {
                                html += `<option value="${ward.name}">${ward.name}</option>`
                            });
                            $('#ward').append(html);
                        }
                    }
                });
            }
        }

    },
    start: function () {
        this.getDistrict();
        this.getWard();
    }
}
verificationOrder.start();
