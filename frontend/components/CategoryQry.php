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
 * Author: Shadow  QQ: 1527200768  Time: 2017/6/30 14:43
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\components;

use common\models\Category;

class CategoryQry extends BaseDb
{
    public function getCategoryParent()
    {
        $model = new Category();
        $category_parent = $model->find()->select(['cat_name'])->where(['parent_id'=>0])->all();
        return $category_parent;
    }
}