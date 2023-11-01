<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AdminAccountController extends Controller
{
    public function index(){
        return view('admin.login', ['title' => 'Đăng nhập Admin']);
    }
    public function sendEmail($code, $emailUser, $title, $progress)
    {
        Mail::send('accounts.viewcode', ['code' => $code, 'title' => $title, 'progress' => $progress], function ($email) use ($emailUser) {
            $email->subject('Verify email address from EMarketXpress');
            $email->to($emailUser);
        });
    }
    public function loginAdmin(Request $requests)
    {
        
        Auth::logout();
        if (Auth::attempt([
            'email' => $requests->input('email'),
            'password' => $requests->input('password'),
        ])) {
            return redirect()->route('admin');
        } else {
            return redirect()->back()->with('errorLogin', 'Tài khoản hoặc mật khẩu không chính xác !');
        }
    }
    public function logoutAdmin(){
        Auth::logout();
        return redirect()->route('loginAdmin');
    }
    
    
}
