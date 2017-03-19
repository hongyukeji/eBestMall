<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $goodsId
 * @property integer $categoryId
 * @property string $goodsIdentifier
 * @property string $goodsName
 * @property string $goodsDescribe
 * @property string $goodsPrice
 * @property string $goodsMarketPrice
 * @property integer $goodsNumber
 * @property integer $goodsSalesVolume
 * @property string $goodsCoverImage
 * @property string $goodsAllImage
 * @property string $goodsIntroduce
 * @property string $goodsIsSale
 * @property string $goodsIsHot
 * @property integer $goodsSort
 * @property integer $status
 * @property integer $createdTime
 * @property integer $updatedTime
 */
class Goods extends BaseModel
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
            [['categoryId', 'goodsName'], 'required'],
            [['categoryId', 'goodsNumber', 'goodsSalesVolume', 'goodsSort', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['goodsPrice', 'goodsMarketPrice'], 'number'],
            [['goodsAllImage', 'goodsIntroduce', 'goodsIsSale', 'goodsIsHot'], 'string'],
            [['goodsIdentifier', 'goodsName', 'goodsDescribe', 'goodsCoverImage'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goodsId' => 'Goods ID',
            'categoryId' => 'Category ID',
            'goodsIdentifier' => 'Goods Identifier',
            'goodsName' => 'Goods Name',
            'goodsDescribe' => 'Goods Describe',
            'goodsPrice' => 'Goods Price',
            'goodsMarketPrice' => 'Goods Market Price',
            'goodsNumber' => 'Goods Number',
            'goodsSalesVolume' => 'Goods Sales Volume',
            'goodsCoverImage' => 'Goods Cover Image',
            'goodsAllImage' => 'Goods All Image',
            'goodsIntroduce' => 'Goods Introduce',
            'goodsIsSale' => 'Goods Is Sale',
            'goodsIsHot' => 'Goods Is Hot',
            'goodsSort' => 'Goods Sort',
            'status' => 'Status',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
        ];
    }
}
