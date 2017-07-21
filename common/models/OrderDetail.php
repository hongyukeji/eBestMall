<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order_detail}}".
 *
 * @property string $id
 * @property string $product_id
 * @property string $product_price
 * @property integer $product_number
 * @property integer $order_id
 * @property integer $created_time
 * @property integer $updated_time
 */
class OrderDetail extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_number', 'order_id', 'created_time', 'updated_time'], 'required'],
            [['product_id', 'product_number', 'order_id', 'created_time', 'updated_time'], 'integer'],
            [['product_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'product_price' => Yii::t('app', 'Product Price'),
            'product_number' => Yii::t('app', 'Product Number'),
            'order_id' => Yii::t('app', 'Order ID'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_time' => Yii::t('app', 'Updated Time'),
        ];
    }
}
