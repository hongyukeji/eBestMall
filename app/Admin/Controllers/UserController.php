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

            $content->header(trans('app.user'));
            $content->description(trans('app.list'));

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

            $content->header(trans('app.user'));
            $content->description(trans('app.list'));

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

            $content->header(trans('app.user'));
            $content->description(trans('app.list'));

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

            $grid->username(trans('admin.username'));
            $grid->email(trans('app.email'));
            $grid->mobile_phone(trans('app.mobile_phone'));
            $grid->nickname(trans('app.nickname'));

            //$grid->column('profile.age');
            //$grid->column('profile.gender');

            //or
            $grid->profile()->age(trans('app.age'));
            $grid->profile()->gender(trans('app.gender'))->editable('select', [0 => trans('app.secrecy'), 1 => trans('app.male'), 2 => trans('app.female')]);

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

            //$form->action('example');   // 表单提交url地址
            //$form->method('post');   // 设置form表单的提交方法,默认为POST方法
            $form->display('id', 'ID');
            $form->text('username', '用户名');
            $form->password('password', '密码');
            $form->email('email', '邮箱');
            $form->mobile('mobile_phone', '手机号');
            $form->text('nickname', '昵称');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
