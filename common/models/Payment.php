<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%payment}}".
 *
 * @property integer $paymentId
 * @property string $paymentName
 * @property string $paymentDescribe
 * @property string $paymentConfig
 * @property integer $status
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%payment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paymentName'], 'required'],
            [['status'], 'integer'],
            [['paymentName', 'paymentDescribe', 'paymentConfig'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paymentId' => 'Payment ID',
            'paymentName' => 'Payment Name',
            'paymentDescribe' => 'Payment Describe',
            'paymentConfig' => 'Payment Config',
            'status' => 'Status',
        ];
    }
}
