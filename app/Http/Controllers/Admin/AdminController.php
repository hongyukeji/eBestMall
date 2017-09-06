<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login()
    {
        if (request()->isMethod('POST')){
            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'password' => 'required|min:6|max:32',
                'is_remember' => 'integer',
            ], [], [
                'name' => '用户名',
                'password' => '密码',
                'is_remember' => '记住我',
            ]);

            $user = request(['email', 'password']);
            $remember = boolval(request('is_remember'));

            if (Auth::guard('admin')->attempt($user, $remember)) {
                return redirect('/admin');
            } else {
                return redirect()->back()->withErrors('登录失败，请检查用户名或者密码是否正确！');
            }
        }else{
            return view('admin.admin.login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
