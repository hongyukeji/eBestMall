<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%shipping}}".
 *
 * @property integer $shippingId
 * @property string $shippingName
 * @property string $shippingDescribe
 * @property integer $shippingPrice
 * @property integer $status
 */
class Shipping extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shipping}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shippingName'], 'required'],
            [['shippingPrice', 'status'], 'integer'],
            [['shippingName', 'shippingDescribe'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shippingId' => Yii::t('app', 'Shipping ID'),
            'shippingName' => Yii::t('app', 'Shipping Name'),
            'shippingDescribe' => Yii::t('app', 'Shipping Describe'),
            'shippingPrice' => Yii::t('app', 'Shipping Price'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
