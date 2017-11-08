<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;

class UserController extends Controller
{
    public function index()
    {
        return Admin::grid(User::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->name('用户名');
            $grid->email('邮箱');

            //$grid->column('profile.age');
            //$grid->column('profile.gender');

            //or
            $grid->profile()->age('年龄');
            $grid->profile()->gender('性别');

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }
}
