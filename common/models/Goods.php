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
            [['goodsIdentifier', 'goodsName', 'goodsDescribe'], 'string', 'max' => 255],
            //[['goodsCoverImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        //文件上传存放的目录
        $dir = "web/uploads/images/" . date("Y") . "/" . date("m") . "/" . date("d");

        //目录不存在则创建目录
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($this->validate()) {
            foreach ($this->goodsCoverImage as $this) {
                $fileName = date("HiiHsHis") . $this->goodsCoverImage->baseName . "." . $this->goodsCoverImage->extension;
                $dir = $dir . "/" . $fileName;
                $this->goodsCoverImage->saveAs($dir);

                //资源存储根路径
                $sitePath = Yii::$app->params['sitePath'];
                $uploadSuccessPath[] = $sitePath . $dir;
            }

            return $uploadSuccessPath;
        } else {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goodsId' => Yii::t('common', 'Goods') . 'ID',
            'categoryId' => Yii::t('common', 'Goods') . Yii::t('common', 'Category'),
            'goodsIdentifier' => Yii::t('common', 'Goods') . Yii::t('common', 'Identifier'),
            'goodsName' => Yii::t('common', 'Goods') . Yii::t('common', 'Name'),
            'goodsDescribe' => Yii::t('common', 'Goods') . Yii::t('common', 'Describe'),
            'goodsPrice' => Yii::t('common', 'Goods') . Yii::t('common', 'Price'),
            'goodsMarketPrice' => Yii::t('common', 'Market') . Yii::t('common', 'Price'),
            'goodsNumber' => Yii::t('common', 'Goods') . Yii::t('common', 'Number'),
            'goodsSalesVolume' => Yii::t('common', 'Goods') . Yii::t('common', 'SalesVolume'),
            'goodsCoverImage' => Yii::t('common', 'CoverImage'),
            'goodsAllImage' => Yii::t('common', 'Goods') . Yii::t('common', 'Image'),
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
