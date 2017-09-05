<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SiteController extends BaseController
{
    public function index()
    {
        return view('admin.site.index');
    }

    public function register()
    {
        //dump(request()->all());

        $this->validate(request(), [
            'name' => 'required|unique:admin_users,name|min:2|max:32',
            'email' => 'required|unique:admin_users,email|email|max:100',
            'password' => 'required|min:6|max:32|confirmed',
        ], [], [
            'name' => '用户名',
            'email' => '邮箱',
            'password' => '密码',
            'password_confirmation' => '重复密码',
        ]);

        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));
        $user = AdminUser::create(compact('name', 'email', 'password'));

        return redirect('/admin/login')->with('success', '用户注册成功，请登录！');
    }

    public function showRegistrationForm()
    {
        return view('admin.site.register');
    }

    public function login()
    {
        //dd(request()->all());
        $this->validate(request(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:6|max:32',
            'is_remember' => 'integer',
        ], [], [
            'email' => '邮箱',
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
    }

    public function showLoginForm()
    {
        return view('admin.site.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
