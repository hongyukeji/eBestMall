<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property integer $orderId
 * @property integer $UserId
 * @property integer $AddressId
 * @property string $orderAmount
 * @property integer $shippingId
 * @property integer $status
 * @property integer $createdTime
 * @property integer $updatedTime
 */
class Order extends \yii\db\ActiveRecord
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
            [['UserId', 'AddressId', 'shippingId', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['orderAmount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'UserId' => 'User ID',
            'AddressId' => 'Address ID',
            'orderAmount' => 'Order Amount',
            'shippingId' => 'Shipping ID',
            'status' => 'Status',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
        ];
    }
}
