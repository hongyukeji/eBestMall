<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property string $orderId
 * @property string $UserId
 * @property integer $AddressId
 * @property string $orderAmount
 * @property integer $shippingId
 * @property string $shippingStatus
 * @property integer $status
 * @property integer $createdTime
 * @property string $updatedTime
 */
class Order extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'AddressId', 'shippingId', 'status', 'createdTime'], 'integer'],
            [['orderAmount'], 'number'],
            [['updatedTime'], 'safe'],
            [['shippingStatus'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderId' => Yii::t('app', 'Order ID'),
            'UserId' => Yii::t('app', 'User ID'),
            'AddressId' => Yii::t('app', 'Address ID'),
            'orderAmount' => Yii::t('app', 'Order Amount'),
            'shippingId' => Yii::t('app', 'Shipping ID'),
            'shippingStatus' => Yii::t('app', 'Shipping Status'),
            'status' => Yii::t('app', 'Status'),
            'createdTime' => Yii::t('app', 'Created Time'),
            'updatedTime' => Yii::t('app', 'Updated Time'),
        ];
    }
}
