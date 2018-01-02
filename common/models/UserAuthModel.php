<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/1/1 17:41
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace common\models;


class UserAuthModel extends UserAuth
{
    public function getUser()
    {
        return $this->hasOne(UserModel::className(), ['user_id' => 'user_id']);
    }
}