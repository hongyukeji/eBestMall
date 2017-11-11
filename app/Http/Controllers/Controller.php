<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // 全局变量
        $common = array();

        // 一级分类 视图共享
        $common['categorys'] = Category::where(['parent_id' => 0, 'is_show' => 1, 'state' => 1])->orderBy('sort_order', 'desc')->get();

        // 将全局变量传递至所有视图中
        view()->share(compact('common'));

        // 判断用户是否登录
        if (Auth::check()) {
            // TODO: 用户登录模块尚未完成,待解决用户信息调用问题,用户名/头像及头像为空时显示默认头像
            // 将登录用户信息传递至所有视图中
            view()->composer('*',function($view){
                $view->with('user',array('name'=>Auth::user()->name,'avatar'=> Auth::user()->avatar));
            });
        }

    }
}
