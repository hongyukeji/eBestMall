<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goods_id
 * @property integer $cate_id
 * @property integer $store_id
 * @property string $goods_code
 * @property string $goods_name
 * @property string $goods_brief
 * @property string $goods_keywords
 * @property string $goods_price
 * @property string $goods_market_price
 * @property string $goods_content
 * @property integer $sort_order
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Goods extends Model
{
    const STATUS_DELETED = 0;   // 状态 默认
    const STATUS_INACTIVE = 0;  // 状态 无效
    const STATUS_ACTIVE = 1;    // 状态 有效

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    public function getStore()
    {
        return $this->hasOne(Store::className(), ['store_id' => 'store_id']);
    }

    public function getBrand()
    {
        return $this->hasOne(GoodsBrand::className(), ['brand_id' => 'brand_id']);
    }

    public function getImages()
    {
        return $this->hasMany(GoodsImages::className(), ['goods_id' => 'goods_id'])->orderBy('sort_order DESC');
    }

    public function getSku()
    {
        return $this->hasMany(GoodsSku::className(), ['goods_id' => 'goods_id'])->orderBy('sort_order DESC');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'store_id', 'goods_code', 'goods_name', 'goods_brief', 'goods_keywords', 'goods_content', 'created_at', 'updated_at'], 'required'],
            [['cate_id', 'store_id', 'sort_order', 'status', 'created_at', 'updated_at'], 'integer'],
            [['goods_price', 'goods_market_price'], 'number'],
            [['goods_content'], 'string'],
            [['goods_code', 'goods_name', 'goods_brief'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', 'Goods ID'),
            'cate_id' => Yii::t('app', 'Cate ID'),
            'store_id' => Yii::t('app', 'Store ID'),
            'goods_code' => Yii::t('app', 'Goods Code'),
            'goods_name' => Yii::t('app', 'Goods Name'),
            'goods_brief' => Yii::t('app', 'Goods Brief'),
            'goods_keywords' => Yii::t('app', 'Goods Keywords'),
            'goods_price' => Yii::t('app', 'Goods Price'),
            'goods_market_price' => Yii::t('app', 'Goods Market Price'),
            'goods_content' => Yii::t('app', 'Goods Content'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @param $goods_id
     * @return array|null|\yii\db\ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function getGoodsInfoById($goods_id)
    {
        $goods = static::find()->with(['brand', 'images', 'sku', 'store'])->where(['goods_id' => $goods_id, 'status' => Store::STATUS_ACTIVE])->asArray()->one();

        if (!$goods) {
            throw new NotFoundHttpException('商品不存在！');
        }

        /*if ($goods['goods_default_sku'] == 0 || $goods['goods_default_sku'] == null) {
            // 处理图片 json转数组并进行降序排序
            $images = json_decode($goods['goods_images'], true);
            ArrayHelper::multisort($images, 'sort_order', SORT_DESC);
            $goods['goods_images'] = $images;
        } else if ($goods['sku'] != null && $goods['goods_default_sku'] != 0 && $goods['goods_default_sku'] != null) {
            // 商品有规格处理
            // 商品默认sku_id数据处理
            foreach ($goods['sku'] as $v) {
                if ($v['sku_id'] == $goods['goods_default_sku']) {
                    $goods['goods_default_sku'] = $v;
                    $goods['goods_price'] = $v['sku_price'];
                    $goods['goods_market_price'] = $v['sku_market_price'];

                    // 处理图片 json转数组并进行降序排序
                    $images = json_decode($v['sku_images'], true);
                    ArrayHelper::multisort($images, 'sort_order', SORT_DESC);

                    // 将图片集第一个数组图片赋值给封面图片
                    $goods['goods_cover_img'] = $images[0]['img'];
                    $goods['goods_cover_thumbnail'] = $images[0]['thumbnail'];

                    // 封面图片赋值完成后删除图片集的第一个数组
                    array_splice($images, 0, 1);

                    $goods['goods_images'] = $images;
                    break;
                }
            }
        }*/

        // 商品详情页导航栏数组
        $category = new GoodsCategory();
        $goods['nav'] = $category->getGoodsNav($goods['cate_id']);
        return $goods;
    }

    public static function getGoodsInfoBySkuId()
    {

    }

    public function getGoodsInfo($goods_id, $sku_id)
    {
        if ($sku_id && $sku_id != 0) {
            // sku_id
        } else {
            // 商品 + 商家 数据
            $goods = self::find()
                ->where(['goods_id' => $goods_id, 'status' => Store::STATUS_ACTIVE])
                ->with('store')
                ->asArray()
                ->one();
        }

        // 处理图片 json转数组并进行降序排序
        $images = json_decode($goods['goods_images'], true);
        ArrayHelper::multisort($images, 'sort_order', SORT_DESC);
        $goods['goods_images'] = $images;

        // 商品详情页导航栏数组
        $category = new GoodsCategory();
        $goods['nav'] = $category->getGoodsNav($goods['cate_id']);

        return $goods;
    }

    public static function findByGoodsId($goods_id)
    {
        return static::findOne(['goods_id' => $goods_id, 'status' => self::STATUS_ACTIVE]);
    }
}
