<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        if (request()->isMethod('POST')) {
            //dd(request()->all());
            $this->validate(request(), [
                'name' => 'required|string|max:255|min:2',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ], [], [
                'name' => '名字',
                'email' => '邮箱',
                'password' => '密码',
            ]);

            $name = request('name');
            $email = request('email');
            $password = bcrypt(request('password'));
            $user = User::create(compact('name', 'email', 'password'));

            return redirect('/admin/user')->with('success', '添加用户成功！');
        }

        return view('admin.user.create');
    }

    public function edit(User $user)
    {
        if (request()->isMethod('post')) {
            $flight = User::find(request('user_id'));
            $this->validate(request(), [
                'name' => 'required|string|max:255|min:2',
                'email' => 'required|string|email|max:255',
            ]);
            if ($flight->name !== request('name')){
                $flight->name = request('name');
            }
            if ($flight->email !== request('email')){
                $flight->email = request('email');
            }
            if (request('password') !== null){
                $this->validate(request(), [
                    'password' => 'string|min:6',
                ]);
                $flight->password = bcrypt(request('password'));
            }
            $flight->save();
            return redirect('/admin/user')->with('success', '用户编辑成功！');
        }
        return view('admin.user.edit', compact('user'));
    }

    public function delete(User $user)
    {
        $result = $user->delete();
        if ($result) {
            return redirect()->back()->with('success', '用户删除成功！');
        } else {
            return redirect()->back()->withErrors('用户删除失败！');
        }
    }
}
