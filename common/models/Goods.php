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
            [['goodsName'], 'required'],
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
            'goodsId' => Yii::t('common', 'Goods') . 'ID',
            'categoryId' => Yii::t('common', 'Category') . 'ID',
            'goodsIdentifier' => Yii::t('common', 'Goods') . Yii::t('common', 'Identifier'),
            'goodsName' => Yii::t('common', 'Goods') . Yii::t('common', 'Name'),
            'goodsDescribe' => Yii::t('common', 'Goods') . Yii::t('common', 'Describe'),
            'goodsPrice' => Yii::t('common', 'Goods') . Yii::t('common', 'Price'),
            'goodsMarketPrice' => Yii::t('common', 'Market') . Yii::t('common', 'Price'),
            'goodsNumber' => Yii::t('common', 'Goods') . Yii::t('common', 'Number'),
            'goodsSalesVolume' => Yii::t('common', 'Goods') . Yii::t('common', 'SalesVolume'),
            'goodsCoverImage' => Yii::t('common', 'CoverImage'),
            'goodsAllImage' => Yii::t('common', 'AllImage'),
            'goodsIntroduce' => Yii::t('common', 'Goods') . Yii::t('common', 'Introduce'),
            'goodsIsSale' => Yii::t('common', 'IsSale'),
            'goodsIsHot' => Yii::t('common', 'IsHot'),
            'goodsSort' => Yii::t('common', 'Goods') . Yii::t('common', 'Sort'),
            'status' => Yii::t('common', 'Status'),
            'createdTime' => Yii::t('common', 'CreatedTime'),
            'updatedTime' => Yii::t('common', 'UpdatedTime'),

        ];
    }
}
