<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goodsId
 * @property string $goodsName
 * @property string $goodsBrief
 * @property string $goodsPrice
 * @property string $goodsMarketPrice
 * @property integer $goodsNumber
 * @property integer $goodsSalesVolume
 * @property string $goodsImage
 * @property string $goodsIntroduce
 * @property integer $goodsStatus
 * @property integer $createdTime
 * @property integer $updatedTime
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodsName'], 'required'],
            [['goodsPrice', 'goodsMarketPrice'], 'number'],
            [['goodsNumber', 'goodsSalesVolume', 'goodsStatus', 'createdTime', 'updatedTime'], 'integer'],
            [['goodsIntroduce'], 'string'],
            [['goodsName', 'goodsBrief', 'goodsImage'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goodsId' => 'Goods ID',
            'goodsName' => 'Goods Name',
            'goodsBrief' => 'Goods Brief',
            'goodsPrice' => 'Goods Price',
            'goodsMarketPrice' => 'Goods Market Price',
            'goodsNumber' => 'Goods Number',
            'goodsSalesVolume' => 'Goods Sales Volume',
            'goodsImage' => 'Goods Image',
            'goodsIntroduce' => 'Goods Introduce',
            'goodsStatus' => 'Goods Status',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
        ];
    }
}
