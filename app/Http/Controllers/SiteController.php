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


use App\Models\Goods;

class SiteController extends Controller
{
    public function index()
    {
        $seckills = Goods::where('status', '=', 1)
            ->orWhere('is_best', '=', 1)
            ->orWhere('is_new', '=', 1)
            ->orWhere('is_hot', '=', 1)
            ->limit(5)
            ->orderBy('sales_volume', 'desc')
            ->get();
        //dd($seckills);
        return view('site.index',compact(['seckills']));
    }
}