<?php

namespace app\models;

use Yii;
use app\models\Goods;

class Search extends Model
{
    public function getGoods($keywords)
    {
        $keywords = explode(" ", $keywords);

        $model = new Goods();
        $goodsList = array();

        foreach ($keywords as $keyword) {
            $goods = $model->find()
                ->where("status=:status and (goods_name like :keyword or `goods_keywords` like :keyword )")
                ->addParams([':status' => Goods::STATUS_ACTIVE, ':keyword' => '%' . $keyword . '%'])
                ->orderBy('sort_order DESC')
                ->asArray()
                ->all();
            $goodsList = array_merge_recursive($goodsList, $goods);
        }

        return $goodsList;
    }
}