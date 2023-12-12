const appProductByCategoriesChild = {
    showNavMobileProduct: () => {
        const showNavMobileProduct_btn = document.querySelector('.shownavMobileProduct');
        if (showNavMobileProduct_btn) {
            const overlayProduct = document.querySelector('#overlayProduct');
            const navMobileProductElement = document.querySelector('.navMobileProduct');
            overlayProduct.onclick = () => {

                navMobileProductElement.classList.remove('active');
                overlayProduct.classList.add('hidden');
            };

            showNavMobileProduct_btn.onclick = () => {
                navMobileProductElement.classList.add('active');
                overlayProduct.classList.remove('hidden');
            };
            const hiddenNavMobileProduct_btn = document.querySelector('.hiddenNavMobileProduct');
            hiddenNavMobileProduct_btn.onclick = () => {
                navMobileProductElement.classList.remove('active');
                overlayProduct.classList.add('hidden');
            }
        }

    },
    // Function by Product_Details
    clickButtonSize: () => {
        const btn_sizeElements = [...document.querySelectorAll('.size_btn')];
        if (btn_sizeElements) {
            const valueSizeSelected = document.querySelector('.size_product');
            btn_sizeElements.forEach((btn_sizeElementClick) => {
                
                btn_sizeElementClick.onclick = () => {
                    btn_sizeElements.forEach((btn_sizeElement) => {
                        btn_sizeElement.classList.remove('active');
                    });
                    let value_size = btn_sizeElementClick.textContent;
                    btn_sizeElementClick.classList.add('active');
                    if(valueSizeSelected){
                        valueSizeSelected.innerHTML =value_size; 
                    }

                }
            })
        }
    },
    suggestedSize: () => {
        const heightElement = document.querySelector('#height');
        const weightElement = document.querySelector('#weight');
        const suggestedSizeElement = document.querySelector('.suggested_size');
        if(heightElement){
            const value_heightElement = document.querySelector('.value_height');
            heightElement.oninput = () => {
                value_heightElement.innerHTML = heightElement.value;
                if(suggestedSizeElement){
                    updateSizeSuggestion();
                }
            }
        }
        if(weightElement){
            const value_weightElement = document.querySelector('.value_weight');
            weightElement.oninput = () => {
                value_weightElement.innerHTML = weightElement.value;
                if(suggestedSizeElement){
                    updateSizeSuggestion();
                }
            }
        }
        function updateSizeSuggestion() {
            const suggestedSize = calculateSuggestedSize(heightElement.value, weightElement.value);
            suggestedSizeElement.innerHTML = `Gợi ý: ${suggestedSize}`;
        }
    
        function calculateSuggestedSize(height, weight) {
            
            if (height >= 150 && height <= 155 && weight >= 40 && weight <= 45) {
                return 'XS';
            } else if (height >= 156 && height <= 160 && weight >= 45 && weight <= 50) {
                return 'S';
            } else if (height >= 161 && height <= 165 && weight >= 50 && weight <= 55) {
                return 'M';
            } else if (height >= 166 && height <= 170 && weight >= 55 && weight <= 60) {
                return 'L';
            } else if (height >= 171 && height <= 175 && weight >= 60 && weight <= 65) {
                return 'XL';
            } else if (height >= 176 && height <= 180 && weight >= 65 && weight <= 70) {
                return 'XXL';
            } else if (height >= 181 && height <= 185 && weight >= 70 && weight <= 75) {
                return 'XXXL';
            } else {
                return 'bạn khó chọn size quá đừng mua nữa đi may đi';
            }
        }
    },
    changeOptionColors: () => {
        const groupTypeColor = document.querySelector('.group_type_color');
        const anh1Images = document.querySelectorAll('.Img1');
        const anh2Images = document.querySelectorAll('.Img2');
         const anh3Images = document.querySelectorAll('.Img3');
        if (groupTypeColor){
            const optionColoItems = [...groupTypeColor.querySelectorAll('img')];
            const value_colorSelected = document.querySelector('.color_product');
            optionColoItems.forEach((optionColoItem, index) => {
                optionColoItem.onclick = () => {
                    let valueColor = optionColoItem.getAttribute('type-color');

                    if (value_colorSelected) {
                        value_colorSelected.innerHTML = valueColor;
                    }
                    if (index === 0) {
                        anh1Images.forEach(Img1 => {
                            Img1.style.display = 'block';
                        });
                        anh2Images.forEach(Img2 => {
                            Img2.style.display = 'none';
                        });
                        anh3Images.forEach(Img3 => {
                            Img3.style.display = 'none';
                        });
                    } else if (index === 1) {
                        anh1Images.forEach(Img1 => {
                            Img1.style.display = 'none';
                        });
                        anh2Images.forEach(Img2 => {
                            Img2.style.display = 'block'; 
                        });
                        anh3Images.forEach(Img3 => {
                            Img3.style.display = 'none';
                        });
                    } else if (index === 2) {
                        anh1Images.forEach(Img1 => {
                            Img1.style.display = 'none';
                        });
                        anh2Images.forEach(Img2 => {
                            Img2.style.display = 'none';
                        });
                        anh3Images.forEach(Img3 => {
                            Img3.style.display = 'block';
                        });
                    }
                };
            });
        }
    },
    start: function () {
        this.showNavMobileProduct();
        this.clickButtonSize();
        this.suggestedSize();
        this.changeOptionColors();
    },
};

appProductByCategoriesChild.start();
