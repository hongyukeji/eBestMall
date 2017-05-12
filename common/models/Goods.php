<?php

namespace common\models;

use Yii;

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
 * @property string $goodsSalePrice
 * @property string $goodsIsHot
 * @property integer $goodsSort
 * @property integer $status
 * @property integer $createdTime
 * @property integer $updatedTime
 */
class Goods extends BaseModel
{
    public $goodsId;
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
            [['goodsName','goodsCoverImage'], 'required'],
            [['categoryId', 'goodsNumber', 'goodsSalesVolume', 'goodsSort', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['goodsPrice', 'goodsMarketPrice', 'goodsSalePrice'], 'number'],
            [['goodsAllImage', 'goodsIntroduce', 'goodsIsSale', 'goodsIsHot'], 'string'],
            [['goodsIdentifier', 'goodsName', 'goodsDescribe', 'goodsCoverImage'], 'string', 'max' => 255],
        ];
    }

    /*
     * 无效
     */
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

    public function add($data){
        if ($this->load($data) && $this->save()){
            return true;
        }else{
            return false;
        }
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Goods') . 'ID',
            'categoryId' => Yii::t('app', 'Goods') . Yii::t('app', 'Category'),
            'goodsIdentifier' => Yii::t('app', 'Goods') . Yii::t('app', 'Identifier'),
            'goodsName' => Yii::t('app', 'Goods') . Yii::t('app', 'Name'),
            'goodsDescribe' => Yii::t('app', 'Goods') . Yii::t('app', 'Describe'),
            'goodsPrice' => Yii::t('app', 'Goods') . Yii::t('app', 'Price'),
            'goodsMarketPrice' => Yii::t('app', 'Market') . Yii::t('app', 'Price'),
            'goodsSalePrice' => Yii::t('app', 'Market') . Yii::t('app', 'Price'),
            'goodsNumber' => Yii::t('app', 'Goods') . Yii::t('app', 'Number'),
            'goodsSalesVolume' => Yii::t('app', 'Goods') . Yii::t('app', 'SalesVolume'),
            'goodsCoverImage' => Yii::t('app', 'CoverImage'),
            'goodsAllImage' => Yii::t('app', 'Goods') . Yii::t('app', 'Image'),
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
