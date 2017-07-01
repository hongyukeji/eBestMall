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
class Payment extends \common\models\BaseModel
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
            'paymentId' => Yii::t('app', 'Payment ID'),
            'paymentName' => Yii::t('app', 'Payment Name'),
            'paymentDescribe' => Yii::t('app', 'Payment Describe'),
            'paymentConfig' => Yii::t('app', 'Payment Config'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
