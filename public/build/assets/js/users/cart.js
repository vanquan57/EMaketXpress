$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function addProductToCart() {
    let path = window.location.pathname.replace("/", "");
    let sizeProduct = $('.size_product').text();
    let colorProduct = $('.color_product').text();
    let numberProduct = $('.numberProduct').text();
    $.ajax({
        type: "POST",
        url: '/add-product-to-cart',
        data: {
            'slugProductCurrent': path,
            'sizeProduct': sizeProduct,
            'colorProduct': colorProduct,
            'numberProduct': numberProduct
        },
        dataType: "JSON",
        success: function (response) {
            if (response.notLogged) {
                window.location.href = "/login";
            }
            if (response.success == true) {
                $('.alert_susses').addClass('active');
                if (response.productByCarts) {
                    $('.group_Products_in_Cart').empty();
                    let products_Item_in_CartHtml = '';
                    let total = 0;
                    response.productByCarts.forEach((productByCart) => {
                        total += productByCart.Price_sale * productByCart.pivot.ProductNumbers;
                        
                        products_Item_in_CartHtml += `<div class="flex mt-2 borde px-1 products_Item_in_Cart">
                        <div class="w-[90px] h-[120px] flex items-center rounded">
                            <img class="object-cover rounded"
                                src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                alt="">
                        </div>
                        <div class="flex-1 pl-2">
                            <a class="py-1" href="">${productByCart.Name}</a>
                            <p class="font-medium text-[#FCAF17] py-1">${number_format(productByCart.Price_sale, 0, '.', '.')}VNĐ
                                <s class="font-normal text-sm pl-1 inline-block text-[#DBDADA]">${number_format(productByCart.Price, 0, '.', '.')}
                                    VNĐ</s>
                            </p>
                            <span
                                class="rounded-full py-1 px-2 bg-[#F8F8F8] w-auto mt-1">${productByCart.pivot.ProductColor} / ${productByCart.pivot.ProductSize}</span>
                            <div class="flex justify-between mt-2">

                                <div class="pr-2">
                                    Tổng cộng: <span
                                        class="font-medium text-[#FF5500]">${number_format(productByCart.Price_sale * productByCart.pivot.ProductNumbers, 0, '.', '.')} 
                                        VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>`
                    });
                    products_Item_in_CartHtml += `
                    <div class="mt-2 bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] h-[40px] flex items-center w-[100%] justify-end pr-2">Tổng cộng: 
                        <span class="font-medium text-[#FF5500]">${ number_format(total, 0, '.', '.') } VNĐ</span>
                    </div>
                    <button class="transition-colors h-[35px] w-[100%]  hover:text-[#816a38] hover:bg-[#52C9F7] bg-[#aadff6] ">XEM GIỎ HÀNG</button>`
                    $('.group_Products_in_Cart').append(products_Item_in_CartHtml);
                }
                setTimeout(() => {
                    $('.alert_susses').removeClass('active');
                }, 2000);
            } else {
                $('.alert_error').addClass('active');
                setTimeout(() => {
                    $('.alert_error').removeClass('active');
                }, 2000);
            }
        }

    });
}

function removeRowProductInCart(Product_cartID) {
    if(confirm('Bạn chắc chắn muốn xóa sản phẩm này ?')){
        $.ajax({
            type: 'DELETE',
            dataType: 'JSON',
            data: { 'Product_cartID': Product_cartID },
            url: '/remove-product-in-cart',
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
function updateNumberProductInCart(numberProductElement , ProductID) {
    let numberProductUpdate = numberProductElement.innerText;
    if(confirm('Bạn chắc chắn muốn cập nhật số lượng sản phẩm này?')){
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: { 
                'ProductID': ProductID,
                'numberProductUpdate': numberProductUpdate
             },
            url: '/update-product-in-cart',
            success: function (response) {
                if (response.success) {
                    alert('Cập nhật thành công ... !');
                    location.reload();
                } else {
                    alert('Đã có lỗi xảy ra hoặc số lượng sản phẩm đạt tối đa vui lòng thử lại sau  ... !');
                }
            }
        });
    }
}

// funtion for cart
const cart = {
    copyCodePromotion : () => {
        const groupCodePromotions = [...document.querySelectorAll('.group_Code_Promotion')];
        if(groupCodePromotions){
            groupCodePromotions.forEach((groupCodePromotion) => {
                const btnCopyCodePromotion = groupCodePromotion.querySelector('.copy_Code_Promotion');
                const codePromotionValue = groupCodePromotion.querySelector('.code_Promotion_value');
                const alertCopied = groupCodePromotion.querySelector('.alert_copied');
                btnCopyCodePromotion.onclick = () => {
                    codePromotionValue.select();
                    codePromotionValue.setSelectionRange(0, 99999);
                    document.execCommand("copy");
                    alertCopied.classList.remove('invisible');
                    setTimeout(() => {
                    alertCopied.classList.add('invisible');

                    },1500)
                }

                
            });

        }
    },
    start: function() {
        this.copyCodePromotion();
    }
}
cart.start();



