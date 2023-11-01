<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Hướng đẫn cài đặt project
```git clone https://github.com/vanquan57/EMaketXpress.git```
## Set up môi trường 
- tạo file môi trường và thiết lập các giá trị cần thiết với thiết bị của bạn
  .env
  # mở terminal và thực hiện 
    - Chạy lệnh sau để tạo khóa ứng dụng trong tệp .env
       ```php artisan key:generate ```
    - cài đặt môi trường composer trong project
      ```composer install```
    - tạo table user bằng câu lệnh 
      ```php artisan migrate```
    - cài đặt môi trường và các tệp liên quan với npm
       ``` npm install ```
      
## Khởi chạy ứng dụng trên thiết bị của bạn
    - mở 2 cửa sổ terminal trong vscode
        - terminal 1 
           ```npm run dev```
        - terminal 2
           ``` php artisan serve ```
