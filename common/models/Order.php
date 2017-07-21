<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property string $id
 * @property integer $user_id
 * @property integer $address_id
 * @property string $order_amount
 * @property integer $shipping_id
 * @property string $shipping_status
 * @property integer $status
 * @property integer $created_time
 * @property integer $updated_time
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
            [['user_id', 'address_id', 'shipping_id', 'status', 'created_time', 'updated_time'], 'integer'],
            [['address_id', 'shipping_id', 'shipping_status', 'created_time', 'updated_time'], 'required'],
            [['order_amount'], 'number'],
            [['shipping_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'order_amount' => Yii::t('app', 'Order Amount'),
            'shipping_id' => Yii::t('app', 'Shipping ID'),
            'shipping_status' => Yii::t('app', 'Shipping Status'),
            'status' => Yii::t('app', 'Status'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_time' => Yii::t('app', 'Updated Time'),
        ];
    }
}
