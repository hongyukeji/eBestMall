<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->username('用户名');
            $grid->email('邮箱');
            $grid->mobile_phone('手机号');
            $grid->nickname('昵称');

            //$grid->column('profile.age');
            //$grid->column('profile.gender');

            //or
            $grid->profile()->age('年龄');
            $grid->profile()->gender('性别')->editable('select', [0 => '保密', 1 => '男', 2 => '女']);

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('username', '用户名')->rules('required|min:2');
            $form->password('password', '密码')->rules('required|min:6');
            $form->email('email', '邮箱');
            $form->mobile('mobile_phone', '手机号');
            $form->text('nickname', '昵称');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
