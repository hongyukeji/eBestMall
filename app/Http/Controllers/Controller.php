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
        // 初始化全局变量
        $common = array();

        // 一级分类 视图共享
        $category = new Category();
        $common['category'] = $category->allShowCategory();

        // 将全局变量传递至所有视图中
        view()->share(compact('common'));
    }
}
