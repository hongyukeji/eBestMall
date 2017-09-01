<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/9/1 15:57
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
}