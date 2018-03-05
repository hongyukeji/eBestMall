<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        // compact
        return view('frontend.default.index');
    }

    public function test()
    {
        dd('test');
    }
}
