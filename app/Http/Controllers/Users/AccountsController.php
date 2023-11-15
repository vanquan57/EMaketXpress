<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\AccountsRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;



class AccountsController extends Controller
{

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function abc(){
        return  'Ngu nè chưa xác thực được ';
    }
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $existUserSocialite = User::where('provider_id', $user->id)->first();
        if ($existUserSocialite) {
            Auth::login($existUserSocialite);
            return redirect()->route('index');
        } else {
            try {
                $username = $user->name ? $user->name : $user->nickname;
                $newUser = User::create(
                    [
                        'username' => (string)$username,
                        'email' => $user->email,
                        'role'=>0,
                        'provider' => $provider,
                        'provider_id' => (string)$user->id,
                        'avatar' => (string)$user->avatar
                    ]
                );
                Auth::login($newUser);
                return redirect()->route('index');
            } catch (\Throwable $th) {
                return redirect()->back()->with('errorInsert', 'Đăng nhập thất bại vui lòng thử lại sau.');
                Log::info($th->getMessage());
            }
        }
    }
    public function viewAuthentication()
    {
        return view('accounts.authentication', ['title' => 'Check Authentication']);
    }
    public function sendEmail($code, $emailUser, $title, $progress)
    {
        Mail::send('accounts.viewcode', ['code' => $code, 'title' => $title, 'progress' => $progress], function ($email) use ($emailUser) {
            $email->subject('Verify email address from EMarketXpress');
            $email->to($emailUser);
        });
    }
    // Xác minh mã và active account
    public function checkAuthentication(Request $request)
    {
        $request->validate([
            'numbercode' => 'required'
        ], [
            'numbercode.required' => 'Vui lòng nhập mã code để được xác minh'
        ]);

        $requestNumberCode = $request->input('numbercode');
        if (session('randomNumber') == $requestNumberCode) {
            try {
                User::where('email', session('emailCheckActive'))
                    ->where('username', session('usernameCheckActive'))
                    ->where('active', 0)
                    ->where('role', 0)
                    ->update(['active' => 1]);
                session()->forget('randomNumber');
                session()->forget('emailCheckActive');
                session()->forget('usernameCheckActive');
                return redirect()->route('login');
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return redirect()->back()->with('error', 'Đã xảy ra lỗi vui lòng thử lại sau hoặc có thể đăng nhập bằng các mạng xã hội !');
            }
        } else {
            return redirect()->back()->with('error', 'Mã xác minh không đúng vui lòng kiểm tra lại Email !');
        }
    }

    public function create(AccountsRequests $requests)
    {
        $email = $requests->input('email');
        if ($email) {
            $haveEmailUser = User::where('email', $email)
            ->where('provider', null)
            ->first();
            if ($haveEmailUser) {
                return redirect()->back()->with('errorInsert', 'Tài khoản đã tồn tại.');
            } else {
                try {
                    $createUser = User::create([
                        'username' => (string)$requests->input('username'),
                        'email' => $email,
                        'password' => Hash::make($requests->input('password')),
                        'active' => 0,
                        'role'=> 0,
                    ]);
                    if ($createUser) {
                        session(['randomNumber' => rand(100000, 999999)]);
                        session(['emailCheckActive' => $email]);
                        session(['usernameCheckActive' => $requests->input('username')]);
                        $this->sendEmail(session('randomNumber'), $email, 'Chào mừng bạn đến với', 'xác minh');
                        return redirect()->route('authentication');
                    }
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    return redirect()->back()->with('errorInsert', 'Tạo tài khoản thất bại vui lòng thử lại sau.');
                }
            }
        }
    }
    public function login(Request $requests)
    {
        Auth::logout();
        $requests->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email không được để trống.',
                'password.required' => 'Mật khẩu không được để trống.'
            ]
        );
        if (Auth::attempt([
            'email' => $requests->input('email'),
            'password' => $requests->input('password'),
        ])) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('errorLogin', 'Tài khoản hoặc mật khẩu không chính xác !');
        }
    }
    // Update password
    public function viewCheckEmailUser()
    {
        return view('accounts.authentication_email', ['title' => 'Xác thực tài khoản']);
    }
    public function showResetPasswordForm(Request $request)
    {

        $email = $request->input('email');
        $user = User::where('email', $email)
            ->where('active', 1)
            ->whereNull('provider')
            ->where('role', 0)
            ->first();
        if ($user) {
            session(['email' => $user->email]);
            session(['username' => $user->username]);
            session(['randomNumber' => rand(100000, 999999)]);
            $this->sendEmail(session('randomNumber'), $email, 'Để đặt lại mật khẩu trên', 'xác minh');
            return redirect()->route('verifyCodeResetPassword');
        } else {
            return redirect()->back()->with('errorResetPassword', 'Không có email nào trùng khớp với tài khoản');
        }
    }
    public function showVerifyCodeForm()
    {
        return view('accounts.Verifystep2ResetPassword', ['title' => 'Xác minh tài khoản']);
    }
    public function checkVerifyCodeForm(Request $request)
    {
        $numberCodeInput = $request->input('numbercode');
        if (session('randomNumber') == $numberCodeInput) {
            session()->forget('randomNumber');
            return redirect()->route('showNewPasswordForm');
        }
        return redirect()->back()->with('error', 'Mã xác minh không đúng vui lòng kiểm tra lại Email !');
    }
    public function showNewPasswordForm()
    {
        return view('accounts.resetpassword', ['title' => 'Đổi mật khẩu']);
    }
    public function updatePassword(Request $request)
    {
        $newPassword = $request->input('newPassword');
        $confirmPassword = $request->input('conFirmPassword');

        if ($newPassword == $confirmPassword) {

            try {
                $hashedPassword = Hash::make($newPassword);
                $username = session()->pull('username');
                $email = session()->pull('email');
                User::where('username', $username)
                    ->where('email', $email)
                    ->where('active', 1)
                    ->where('role', 0)
                    ->update(['password' => $hashedPassword]);
                return redirect()->route('login');
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        } else {
            return redirect()->back()->with('errorConfirmPassword', 'Mật khẩu không trùng khớp');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
