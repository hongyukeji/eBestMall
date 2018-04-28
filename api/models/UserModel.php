<?php

namespace api\models;

use common\models\UserModel as BaseUserModel;

class UserModel extends BaseUserModel
{
    public function fields()
    {
        return ['user_id', 'username', 'email'];
    }

    public function extraFields()
    {
        return ['profile'];
    }
}