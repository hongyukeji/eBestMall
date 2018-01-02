<?php

namespace api\models;

use common\models\Goods;

class GoodsModel extends Goods
{
    public function fields()
    {
        return ['goods_id', 'goods_name', 'goods_brief', 'goods_price'];
    }

    public function extraFields()
    {
        return ['profile'];
    }
}