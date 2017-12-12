<?php

namespace app\models;

use Yii;

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

    public function getGoodsInfo($goods_id, $sku_id)
    {
        // 商品 + 商家 数据
        $goods = self::find()
            ->where(['goods_id' => $goods_id, 'status' => Store::STATUS_ACTIVE])
            ->with('store')
            ->asArray()
            ->one();

        // 商品详情页导航栏数组
        $category = new Category();
        $goods['nav'] = $category->getGoodsNav($goods['cate_id']);

        return $goods;
    }
}
