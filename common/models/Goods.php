<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $goodsId
 * @property integer $categoryId
 * @property integer $sellerId
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
 * @property string $goodsSalePrice
 * @property string $goodsIsHot
 * @property integer $goodsSort
 * @property integer $goodsIsSelf
 * @property integer $status
 * @property integer $createdTime
 * @property string $updatedTime
 */
class Goods extends \common\models\BaseModel
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
            [['categoryId', 'sellerId', 'goodsNumber', 'goodsSalesVolume', 'goodsSort', 'goodsIsSelf', 'status', 'createdTime'], 'integer'],
            [['goodsPrice', 'goodsMarketPrice', 'goodsSalePrice'], 'number'],
            [['goodsAllImage', 'goodsIntroduce', 'goodsIsSale', 'goodsIsHot'], 'string'],
            [['updatedTime'], 'safe'],
            [['goodsIdentifier', 'goodsName', 'goodsDescribe', 'goodsCoverImage'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goodsId' => Yii::t('app', 'Goods ID'),
            'categoryId' => Yii::t('app', 'Category ID'),
            'sellerId' => Yii::t('app', 'Seller ID'),
            'goodsIdentifier' => Yii::t('app', 'Goods Identifier'),
            'goodsName' => Yii::t('app', 'Goods Name'),
            'goodsDescribe' => Yii::t('app', 'Goods Describe'),
            'goodsPrice' => Yii::t('app', 'Goods Price'),
            'goodsMarketPrice' => Yii::t('app', 'Goods Market Price'),
            'goodsNumber' => Yii::t('app', 'Goods Number'),
            'goodsSalesVolume' => Yii::t('app', 'Goods Sales Volume'),
            'goodsCoverImage' => Yii::t('app', 'Goods Cover Image'),
            'goodsAllImage' => Yii::t('app', 'Goods All Image'),
            'goodsIntroduce' => Yii::t('app', 'Goods Introduce'),
            'goodsIsSale' => Yii::t('app', 'Goods Is Sale'),
            'goodsSalePrice' => Yii::t('app', 'Goods Sale Price'),
            'goodsIsHot' => Yii::t('app', 'Goods Is Hot'),
            'goodsSort' => Yii::t('app', 'Goods Sort'),
            'goodsIsSelf' => Yii::t('app', 'Goods Is Self'),
            'status' => Yii::t('app', 'Status'),
            'createdTime' => Yii::t('app', 'Created Time'),
            'updatedTime' => Yii::t('app', 'Updated Time'),
        ];
    }
}
