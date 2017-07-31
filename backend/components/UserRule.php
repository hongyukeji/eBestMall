<?php
/**
 * 管理用户规则
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/10 19:51
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace backend\components;

use Yii;

class UserRule extends \yii\rbac\Rule{
    public function execute($user, $item, $params)
    {
        // 由于只针对 update 和 delete 操作, 当操作不是 update 和 delete 操作时直接返回 true
        // 当更新的用户id登录, 是当前的用户id时, 可以进行更新
        if (Yii::$app->controller->action->id !== 'update' && Yii::$app->controller->action->id !== 'delete' || Yii::$app->user->id == $params['id']){
            return true;
        }
        return false;
    }
}