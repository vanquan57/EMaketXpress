<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="w-screen h-screen bg-no-repeat bg-center bg-cover flex items-center"
        style="background-image: url('/images/login-background.webp')">
        <div
            class="w-[100%] md:m-auto  md:min-h-[546px] md:w-[440px] md:py-5 md:px-8 md:shadow-[0_0_8px_rgba(30,40,60,.1)] md:rounded-lg">
            <div class="flex justify-center w-[100%]">
                <img src="/images/logo.png" alt="logo" class="w-[100px] h-[100px] object-cover">
            </div>
            <form action="" method="POST">

                <h3 class="text-[26px] text-[#222] font-medium">Đăng ký tài khoản</h3>
                @if (Session::has('errorInsert'))
                    <div class="transition-all errors_username text-[13px] text-[#FF0000]">
                        {{ Session::get('errorInsert') }}
                    </div>
                @endif
                <div class="login_input-element mt-6">
                    <input type="text" id="username" name="username">
                    <label for="username">Họ và tên</label>
                </div>
                @if (Session::has('errors'))
                    <div class="transition-all errors_username text-[10px] text-[#FF0000]">
                        {{ Session::get('errors')->first('username') }}
                    </div>
                @endif

                <div class="login_input-element mt-5">
                    <input type="email" id="email" name="email">
                    <label for="email">Email</label>
                </div>
                @if (Session::has('errors'))
                    <div class="transition-all errors_Email text-[10px] text-[#FF0000]">
                        {{ Session::get('errors')->first('email') }}
                    </div>
                @endif

                <div class="login_input-element mt-6">
                    <input type="password" name="password" id="password">
                    <label for="password">Mật khẩu</label>
                </div>
                @if (Session::has('errors'))
                    <div class="transition-all errors_password text-[10px] text-[#FF0000]">
                        {{ Session::get('errors')->first('password') }}
                    </div>
                @endif
                <div class="mt-6 flex items-center text-[15px]">
                    <input type="checkbox" id="warrantyPolicy">
                    <label for="warrantyPolicy" class="ml-1 text-[13px]">Bằng việc Đăng ký, bạn đã đọc và đồng ý với <a
                            href="#" class="text-[#306BD9]">Điều khoản sử dụng</a> và <a href="#"
                            class="text-[#306BD9]">Chính sách bảo mật</a> của Chợ Tốt</label>
                </div>
                <button type="submit"
                    class="w-[100%] transition-all buttonSubmit text-white text-[16px] font-bold rounded bg-[#f80] border-[#f80] mt-5 py-2 px-5">ĐĂNG
                    KÝ</button>
                @csrf
            </form>
            <div class="flex items-center mt-2">
                <hr class="h-[1px] bg-[#8c8c8c] w-[100%] flex-1 mr-2">
                <span>Hoặc đăng nhập bằng</span>
                <hr class="h-[1px] bg-[#8c8c8c] w-[100%] flex-1 ml-2">
            </div>
            <div class="flex justify-between mt-2">
                <a href="/login/facebook"><button
                        class="flex items-center font-semibold text-black h-[40px] w-[113px] justify-center rounded border"><svg
                            class="mr-1" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0005 1.66797C5.3988 1.66797 1.66797 5.32786 1.66797 9.84202C1.66797 13.9213 4.71464 17.3024 8.6988 17.918V12.2054H6.58214V9.84202H8.6988V8.0411C8.6988 5.99084 9.94297 4.86025 11.8455 4.86025C12.7571 4.86025 13.7121 5.01966 13.7121 5.01966V7.02986H12.6588C11.6255 7.02986 11.3021 7.66096 11.3021 8.3076V9.84038H13.6113L13.2421 12.2037H11.3021V17.9163C15.2863 17.304 18.333 13.9221 18.333 9.84202C18.333 5.32786 14.6021 1.66797 10.0005 1.66797Z"
                                fill="#2561CF"></path>
                        </svg>Facebook</button></a>
                <a href="/login/google"><button
                        class="flex items-center font-semibold text-black h-[40px] w-[113px] justify-center rounded border"><svg
                            class="mr-1" width="21" height="20" viewBox="0 0 21 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.2992 10.1951C19.2992 9.47569 19.2395 8.95069 19.1102 8.40625H10.7031V11.6534H15.6379C15.5384 12.4604 15.0012 13.6757 13.8072 14.4923L13.7905 14.601L16.4487 16.6133L16.6328 16.6312C18.3242 15.1048 19.2992 12.859 19.2992 10.1951Z"
                                fill="#4285F4"></path>
                            <path
                                d="M10.7042 18.75C13.1219 18.75 15.1515 17.9722 16.634 16.6306L13.8084 14.4916C13.0522 15.0069 12.0374 15.3666 10.7042 15.3666C8.33635 15.3666 6.32663 13.8403 5.61022 11.7306L5.50522 11.7393L2.74122 13.8296L2.70508 13.9278C4.17754 16.7861 7.2021 18.75 10.7042 18.75Z"
                                fill="#34A853"></path>
                            <path
                                d="M5.61025 11.7322C5.42122 11.1878 5.31182 10.6044 5.31182 10.0016C5.31182 9.39881 5.42122 8.8155 5.6003 8.27106L5.59529 8.15511L2.79666 6.03125L2.7051 6.07381C2.09823 7.25994 1.75 8.59191 1.75 10.0016C1.75 11.4113 2.09823 12.7432 2.7051 13.9294L5.61025 11.7322Z"
                                fill="#FBBC05"></path>
                            <path
                                d="M10.7042 4.63331C12.3856 4.63331 13.5198 5.34303 14.1665 5.93612L16.6936 3.525C15.1416 2.11528 13.1219 1.25 10.7042 1.25C7.2021 1.25 4.17754 3.21387 2.70508 6.07218L5.60028 8.26944C6.32664 6.15972 8.33636 4.63331 10.7042 4.63331Z"
                                fill="#EB4335"></path>
                        </svg>Google</button></a>
                <a href="/login/github"><button
                        class="flex items-center font-semibold text-black h-[40px] w-[113px] justify-center rounded border"><svg
                            class="mr-1" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>Github</button></a>
            </div>
            <div class="text-[14px] text-center">Đã có tài khoản? <a
                    class="mt-5 inline-block font-semibold text-[#306BD9]" href="/login">Đăng nhập ngay</a>
            </div>
        </div>
    </div>
    <script>
        const phoneApp = {
            phoneHasValid: function() {
                const emailInput = document.querySelector('#email');
                emailInput.oninput = () => {
                    const errors_Email = document.querySelector('.errors_Email');
                    if (emailInput.value) {
                        if (errors_Email) {
                            errors_Email.style.visibility = 'hidden'
                        }
                        emailInput.classList.add('hasvalue');
                    } else {
                        emailInput.classList.remove('hasvalue');
                    }
                }

            },
            passwordHasValid: function() {
                const passwordInput = document.querySelector('#password');
                passwordInput.oninput = () => {
                    const errors_password = document.querySelector('.errors_password');
                    if (passwordInput.value) {
                        if (errors_password) {
                            errors_password.style.visibility = 'hidden'
                        }
                        passwordInput.classList.add('hasvalue');
                    } else {
                        passwordInput.classList.remove('hasvalue');
                    }
                }

            },
            usernameHasValid: function() {
                const usernameInput = document.querySelector('#username');
                usernameInput.oninput = () => {
                    const errors_username = document.querySelector('.errors_username');
                    if (usernameInput.value) {
                        if (errors_username) {
                            errors_username.style.visibility = 'hidden'
                        }
                        usernameInput.classList.add('hasvalue');
                    } else {
                        usernameInput.classList.remove('hasvalue');
                    }
                }

            },
            toggleButton: function() {
                const checkBoxWarranty = document.getElementById('warrantyPolicy');
                const buttonSubmit = document.querySelector('.buttonSubmit')
                buttonSubmit.style.opacity = '0.5';
                buttonSubmit.disabled = true;
                checkBoxWarranty.onclick = () => {
                    if (checkBoxWarranty.checked) {
                        buttonSubmit.disabled = false;
                        buttonSubmit.style.opacity = '1';

                    } else {
                        buttonSubmit.disabled = true;
                        buttonSubmit.style.opacity = '0.5';
                    }
                }

            },
            start: function() {
                this.phoneHasValid();
                this.passwordHasValid();
                this.usernameHasValid();
                this.toggleButton();
            }
        }
        phoneApp.start();
    </script>

    @include('layouts.footer')
</body>

</html>
