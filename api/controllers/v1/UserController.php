<?php
namespace api\controllers\v1;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'api\models\UserModel';
}