const app = {
    showNavMobile: () => {
        const showNavMobileElement = document.querySelector('.showNavMobile');
        const overlay = document.querySelector('#overlay');
        const navMobileElement = document.querySelector('.nav_mobile');
        overlay.onclick = () => {
            navMobileElement.classList.remove('active');
            overlay.classList.add('hidden');
        }
        showNavMobileElement.onclick = () => {
            const navMobileElement = document.querySelector('.nav_mobile');
            navMobileElement.classList.add('active');
            overlay.classList.remove('hidden');
        }
    },
    hiddenNavMobile: () => {
        const hiddenNavMobileElement = document.querySelector('.hiddenNavMobile');
        hiddenNavMobileElement.onclick = () => {
            const navMobileElement = document.querySelector('.nav_mobile');
            const overlay = document.querySelector('#overlay');
            navMobileElement.classList.remove('active');
            overlay.classList.add('hidden');


        }
    },

    dropDownCategory: () => {
        const dropDownButtons = document.querySelectorAll('.dropDownBtn');
        dropDownButtons.forEach(function (button) {
            button.onclick = () => {
                const icon = button.firstChild;
                const contentElement = button.parentNode.nextElementSibling;

                if (contentElement.style.display === 'block') {
                    contentElement.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';

                } else {
                    contentElement.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';

                }
            }


        });
    },
    moveCategoryList: () => {
        const category_listItem = Array.from(document.querySelector('.category_list').children);
        const allCategoryItems = document.querySelectorAll('.category_item_');
        category_listItem.forEach((clickedItem) => {
            clickedItem.onclick = () => {
                category_listItem.forEach((item) => {
                    item.classList.remove('active');
                });
                clickedItem.classList.add('active');
                const category_itemElement = document.querySelector(`.category_item_${clickedItem.getAttribute('data')}`);
                if (category_itemElement) {
                    allCategoryItems.forEach((allCategoryItem) => {
                        allCategoryItem.classList.add('hidden');
                    });
                    category_itemElement.classList.remove('hidden');

                }
            }
        });
    },
    upAndDownNumberProductInCart: function () {
        const group_UpAndDown_NumberElement = document.querySelectorAll('.group_UpAndDown_Number');
        const arrayGroupUpAndDown = [...group_UpAndDown_NumberElement];
        arrayGroupUpAndDown.forEach((groupUpAndDownItem) => {
            const buttonReduced = groupUpAndDownItem.querySelector('.buttonReduced');
            const numberProduct = groupUpAndDownItem.querySelector('.numberProduct');
            const buttonIncrease = groupUpAndDownItem.querySelector('.buttonIncrease');
            buttonReduced.onclick = () => {

                if (parseInt(numberProduct.value) > 0) {
                    numberProduct.value = parseInt(numberProduct.value) - 1;
                }
            }
            buttonIncrease.onclick = () => {
                numberProduct.value = parseInt(numberProduct.value) + 1;
            }
        })


    },
    changeMainImage: function () {
        const group_Product = [...document.querySelectorAll('.group_Product')];
        group_Product.forEach((group_ProductItem) => {
            const main_image = group_ProductItem.querySelector('.main_image');
            const item_image = group_ProductItem.querySelector('.item_image');
            const arrImageItems = [...item_image.querySelectorAll('img')];
            arrImageItems.forEach((imageItem) => {
                imageItem.onclick = () => {
                    main_image.src = imageItem.src;
                }
            });
        });


    },
    start: function () {
        this.showNavMobile();
        this.hiddenNavMobile();
        this.dropDownCategory();
        this.moveCategoryList();
        this.upAndDownNumberProductInCart();
        this.changeMainImage();
    }
}
app.start();