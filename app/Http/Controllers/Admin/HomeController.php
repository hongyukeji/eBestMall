<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index()
    {
        return view('admin.layouts.main',compact(''));
    }

    public function home()
    {
        return view('admin.home.home',compact(''));
    }
}
