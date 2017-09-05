<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use App\Http\Requests;
use Auth;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.site.index');
    }


}
