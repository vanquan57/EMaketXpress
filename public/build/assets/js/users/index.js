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
                
                if(contentElement.style.display === 'block'){
                    contentElement.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';

                }else{
                    contentElement.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';

                }
            }


        });
    },
    start: function () {
        this.showNavMobile();
        this.hiddenNavMobile();
        this.dropDownCategory();
    }
}
app.start();