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
class GoodsForm extends BaseModel
{
    public $goodsId;
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
            [['goodsIdentifier', 'goodsName', 'goodsDescribe', 'goodsCoverImage'], 'string', 'max' => 255],
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