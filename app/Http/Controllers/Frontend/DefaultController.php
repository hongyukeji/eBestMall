<?php

namespace App\Http\Controllers\Frontend;

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
    public function test()
    {
        //
    }
}
