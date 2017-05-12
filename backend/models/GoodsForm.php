<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/19 13:39
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace backend\models;


use common\models\BaseModel;
use Yii;
use yii\base\Model;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $id
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
class GoodsForm extends BaseModel
{
    public $id;
    public $categoryId;
    public $goodsIdentifier;
    public $goodsName;
    public $goodsDescribe;
    public $goodsPrice;
    public $goodsMarketPrice;
    public $goodsNumber;
    public $goodsSalesVolume;
    public $goodsCoverImage;
    public $goodsAllImage;
    public $goodsIntroduce;
    public $goodsIsSale;
    public $goodsIsHot;
    public $goodsSort;
    public $status;
    public $createdTime;
    public $updatedTime;

    public $imageFile;

    public function rules()
    {
        return [
            [['goodsName'], 'required'],
            [['categoryId', 'goodsNumber', 'goodsSalesVolume', 'goodsSort', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['goodsPrice', 'goodsMarketPrice'], 'number'],
            [['goodsAllImage', 'goodsIntroduce', 'goodsIsSale', 'goodsIsHot'], 'string'],
            [['goodsIdentifier', 'goodsName', 'goodsDescribe'], 'string', 'max' => 255],
            [['goodsCoverImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','maxFiles' => 1],
            [['goodsAllImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','maxFiles' => 10],
        ];
    }


    public function createGoods()
    {

    }

    public function editGoods()
    {

    }

    public function deleteGoods()
    {

    }

    public function searchGoods()
    {

    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Goods') . 'ID',
            'categoryId' => Yii::t('app', 'Category') . 'ID',
            'goodsIdentifier' => Yii::t('app', 'Goods') . Yii::t('app', 'Identifier'),
            'goodsName' => Yii::t('app', 'Goods') . Yii::t('app', 'Name'),
            'goodsDescribe' => Yii::t('app', 'Goods') . Yii::t('app', 'Describe'),
            'goodsPrice' => Yii::t('app', 'Goods') . Yii::t('app', 'Price'),
            'goodsMarketPrice' => Yii::t('app', 'Market') . Yii::t('app', 'Price'),
            'goodsNumber' => Yii::t('app', 'Goods') . Yii::t('app', 'Number'),
            'goodsSalesVolume' => Yii::t('app', 'Goods') . Yii::t('app', 'SalesVolume'),
            'goodsCoverImage' => Yii::t('app', 'CoverImage'),
            'goodsAllImage' => Yii::t('app', 'AllImage'),
            'goodsIntroduce' => Yii::t('app', 'Goods') . Yii::t('app', 'Introduce'),
            'goodsIsSale' => Yii::t('app', 'IsSale'),
            'goodsIsHot' => Yii::t('app', 'IsHot'),
            'goodsSort' => Yii::t('app', 'Goods') . Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'createdTime' => Yii::t('app', 'CreatedTime'),
            'updatedTime' => Yii::t('app', 'UpdatedTime'),

        ];
    }

}