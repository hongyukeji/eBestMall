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
 * Author: Shadow  QQ: 1527200768  Time: 2017/6/15 13:06
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace frontend\components;


use common\models\Cart;

class CartQry extends BaseDb
{

    public function getCartList($id)
    {
        $model = new Cart();
        $cart_list = $model->find()->where(['userId' => $id])->all();
        return $cart_list;
    }

    /*
    private $i;
    public function __construct()
    {
        $this->i = mt_rand(1000, 9999);
    }
    public function getI()
    {
        echo $this->i . '<br />';
    }
    */

}