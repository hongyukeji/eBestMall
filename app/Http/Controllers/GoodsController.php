<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index($id)
    {
        $goods = Goods::where(['status' => 1, 'goods_id' => $id])->first();
        return view('goods.index', compact('goods'));
    }
}
