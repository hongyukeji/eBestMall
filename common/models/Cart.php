<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cart}}".
 *
 * @property string $cartId
 * @property string $goodsId
 * @property integer $goodsNumber
 * @property string $goodsPrice
 * @property string $userId
 * @property integer $createdTime
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodsId', 'goodsNumber', 'userId', 'createdTime'], 'integer'],
            [['goodsPrice'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cartId' => Yii::t('app', 'Cart ID'),
            'goodsId' => Yii::t('app', 'Goods ID'),
            'goodsNumber' => Yii::t('app', 'Goods Number'),
            'goodsPrice' => Yii::t('app', 'Goods Price'),
            'userId' => Yii::t('app', 'User ID'),
            'createdTime' => Yii::t('app', 'Created Time'),
        ];
    }
}
