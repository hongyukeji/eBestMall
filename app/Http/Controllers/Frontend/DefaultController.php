<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FunctionsHelper;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        // compact
        return view('frontend.default.index');
    }

    public function about()
    {
        return view('frontend.default.about');
    }

    public function error()
    {
        return view('frontend.default.error');
    }

    // TODO: 测试方法
    public function test()
    {
        dump(FunctionsHelper::check_phone_umber('13800138000'));

        dd(FunctionsHelper::generate_order_number());
    }
}
