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
 * Author: Shadow  QQ: 1527200768  Time: 2017/8/25 12:17
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Http\Controllers\Admin;

use App\Models\Message;

class MessageController extends BaseController
{
    public function index(){
        $messages = Message::paginate(15);
        return view('admin.message.index',compact('messages'));
    }

}