<?php

namespace App\Admin\Controllers;

use App\Models\Category;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CategoryController extends Controller
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

            $content->header(trans('app.goods') . trans('app.category'));
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

            $content->header(trans('app.goods') . trans('app.category'));
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

            $content->header(trans('app.goods') . trans('app.category'));
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
        return Admin::grid(Category::class, function (Grid $grid) {

            $grid->cate_id('ID')->sortable();
            $grid->cate_name('分类名称');
            $grid->parent_id('分类父id');
            $grid->short_name('分类简称');
            $grid->cate_level('分类等级');
            $grid->cate_keywords('分类关键词');
            $grid->cate_desc('分类描述');
            //$grid->cate_image('分类图片');
            $grid->sort_order('排序顺序');
            $grid->is_show('是否显示');
            $grid->state('状态');
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
        return Admin::form(Category::class, function (Form $form) {

            $form->display('cate_id', 'ID');
            $form->text('cate_name', '分类名称');
            $form->text('parent_id', '分类父id');
            $form->text('short_name', '分类简称');
            $form->text('cate_level', '分类等级');
            $form->text('cate_keywords', '分类关键词');
            $form->text('cate_desc', '分类描述');
            $form->text('cate_image', '分类图片');
            $form->text('sort_order', '排序顺序');
            $form->text('is_show', '是否显示');
            $form->text('state', '状态');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
