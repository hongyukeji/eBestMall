<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order_detail}}".
 *
 * @property string $orderDetailId
 * @property string $orderDetailGoodsId
 * @property string $orderDetailGoodsPrice
 * @property integer $orderDetailGoodsNumber
 * @property integer $orderId
 * @property integer $createdTime
 * @property string $updatedTime
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
            [['orderDetailGoodsId', 'orderDetailGoodsNumber', 'orderId', 'createdTime'], 'integer'],
            [['orderDetailGoodsPrice'], 'number'],
            [['updatedTime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderDetailId' => Yii::t('app', 'Order Detail ID'),
            'orderDetailGoodsId' => Yii::t('app', 'Order Detail Goods ID'),
            'orderDetailGoodsPrice' => Yii::t('app', 'Order Detail Goods Price'),
            'orderDetailGoodsNumber' => Yii::t('app', 'Order Detail Goods Number'),
            'orderId' => Yii::t('app', 'Order ID'),
            'createdTime' => Yii::t('app', 'Created Time'),
            'updatedTime' => Yii::t('app', 'Updated Time'),
        ];
    }
}
