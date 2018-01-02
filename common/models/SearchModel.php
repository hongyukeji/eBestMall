<?php

namespace common\models;

use Yii;
use common\models\GoodsModel;

class SearchModel extends Model
{
    public function getGoods($keywords)
    {
        $keywords = explode(" ", $keywords);

        $model = new GoodsModel();
        $goodsList = array();

        foreach ($keywords as $keyword) {
            $goods = $model->find()
                ->where("status=:status and (goods_name like :keyword or `goods_keywords` like :keyword )")
                ->addParams([':status' => GoodsModel::STATUS_ACTIVE, ':keyword' => '%' . $keyword . '%'])
                ->orderBy('sort_order DESC')
                ->asArray()
                ->all();
            $goodsList = array_merge_recursive($goodsList, $goods);
        }

        return $goodsList;
    }
}