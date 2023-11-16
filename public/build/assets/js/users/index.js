const app = {
    slideShow: function () {
        const sliderElement  = document.querySelector('.slider');
        if(sliderElement){
            const imgPosition = document.querySelectorAll(".aspect-ratio-169 img");
        const imgContainer = document.querySelector(".aspect-ratio-169");
        const imgNumber = imgPosition.length;
        const dotItem = document.querySelectorAll(".dot");
        let indexImg = 0;
        let windowWidth;
        imgPosition.forEach((image, index) => {
            image.style.left = index * 100 + "%";
            dotItem[index].onclick = () => {
                slider(index);
                indexImg = index;
            };
        });
        function slide() {
            indexImg++;
            if (indexImg >= imgNumber) {
                indexImg = 0;
            }
            slider(indexImg);
            windowWidth = window.innerWidth;
        }
        function slider(indexImg) {
            imgContainer.style.left = "-" + indexImg * 100 + "%";
            if (windowWidth >= 1279) {
                const dotActive = document.querySelector(".dot.active");
                dotActive.classList.remove("active");
                dotItem[indexImg].classList.add("active");
            }
        }
        if (imgPosition && imgContainer) {
            setInterval(slide, 5000);
            console.log(imgPosition);
        }
        }
    },
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
        if (dropDownButtons) {
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
        }

    },
    moveCategoryList: () => {
        const category_list = document.querySelector('.category_list');
        if (category_list) {
            const category_listItem = [...category_list.children];

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
        }

    },
    upAndDownNumberProductInCart: function () {
        const group_UpAndDown_NumberElement = document.querySelectorAll('.group_UpAndDown_Number');
        if (group_UpAndDown_NumberElement) {
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
        }



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
    MenuDropDown: function () {
        const containerDropdown = document.querySelectorAll(".container-dropdown");
        containerDropdown.forEach((containerDropdown) => {
            containerDropdown.onclick = (e) => {
                const iconRotate = containerDropdown.querySelector(".fa-chevron-up");
                const ul = containerDropdown.nextElementSibling;
                if (ul.style.display == "none" || ul.style.display == "") {
                    ul.style.display = "block";
                    ul.style.opacity = "1";
                    ul.style.transform = "scaleY(1)";
                    iconRotate.style.transform = "rotate(180deg)";
                } else {
                    ul.style.display = "none";
                    ul.style.opacity = "0";
                    ul.style.transform = "scaleY(0)";
                    iconRotate.style.transform = "rotate(0deg)";
                }
            };
        });
    },
    // function specialtyEvent
    wrapProductSpecialtyEvent: function () {

        const group_product_specialtyEvents = document.querySelectorAll('.group_product_specialtyevent');
        if (group_product_specialtyEvents) {
            group_product_specialtyEvents.forEach((group_product_specialtyEvents) => {
                const wrap_product = group_product_specialtyEvents.querySelector('.wrap_product');
                const wrap_products = [...wrap_product.children];
                const productSpecialtyEvents = [...group_product_specialtyEvents.querySelectorAll('.specialtyevent_')]
                wrap_products.forEach((wrap_product) => {
                    wrap_product.onclick = () => {
                        wrap_products.forEach((wrap_productItem) => {
                            if (wrap_productItem.classList.contains('font-extrabold')) {
                                wrap_productItem.classList.remove('font-extrabold');
                            }
                        })
                        wrap_product.classList.add('font-extrabold');
                        productSpecialtyEvents.forEach((productSpecialtyEvent) => {
                            productSpecialtyEvent.classList.add('hidden');
                        });
                        const productSpecialtyEventItem = group_product_specialtyEvents.querySelector(`.specialtyevent_${wrap_product.getAttribute('name_wrapProduct')}`)
                        if (productSpecialtyEventItem) {
                            productSpecialtyEventItem.classList.remove('hidden');

                        }

                    }
                });
            });

        }
    },
    start: function () {
        this.slideShow();
        this.showNavMobile();
        this.hiddenNavMobile();
        this.dropDownCategory();
        this.moveCategoryList();
        this.upAndDownNumberProductInCart();
        this.changeMainImage();
        this.MenuDropDown();
        //  // function specialtyEvent
        this.wrapProductSpecialtyEvent();

    }
}
app.start();