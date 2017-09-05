<?php
/**
 * eBestCMS
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/8/25 12:02
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Http\Controllers\Admin;


use App\Models\AdminUser;

class ManageController extends BaseController
{
    public function index(){
        $users = AdminUser::paginate(10);
        return view('admin.manage.index',compact('users'));
    }
}