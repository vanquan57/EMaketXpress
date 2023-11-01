<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.profile', ['title' => 'Profile']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->has('formResetPassword')) {
            if (Auth::check()) {
                $accountAdmin = Auth::user();
                if (Hash::check($request->input('password_current'), $accountAdmin->password)) {
                    if ($request->input('password') == $request->input('password_confirmation')) {
                        User::where('email', Auth::user()->email)
                            ->where('role', 1)
                            ->where('username', Auth::user()->username)
                            ->update(['password' => Hash::make($request->input('password_confirmation'))]);
                        return redirect()->back()->with('successMessage', 'Cập nhật mật khẩu thành công ... !');
                    } else {
                        return redirect()->back()->with('errorConfirmPass', 'Mật khẩu nhập lại không trùng khớp ... !');
                    }
                } else {
                    return redirect()->back()->with('errorAuthPass', 'Mật khẩu hiện tại không đúng ... !');
                }
            }
        }
        if (($request->has('formInfo'))) {
            $accountAdmin = User::where('username', Auth::user()->username)
                ->where('email', Auth::user()->email)
                ->where('role', 1)
                ->first();
            if ($request->input('newAvatar')) {
                $accountAdmin->avatar = $request->input('newAvatar');
            }
            if ($request->input('username')) {
                $accountAdmin->username = $request->input('username');
            }
            if ($request->input('email')) {
                $accountAdmin->email = $request->input('email');
            }
            if ($accountAdmin->save()) {
                return redirect()->back()->with('successUpdateInfo', 'Cập nhật thông tin thành công ... !');
            } else {
                
                return redirect()->back()->with('errorUpdateInfo', 'Đã có lỗi xảy ra vui lòng thử lại sau ... !');

            };
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
