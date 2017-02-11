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
class Shipping extends \yii\db\ActiveRecord
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
            'shippingId' => 'Shipping ID',
            'shippingName' => 'Shipping Name',
            'shippingDescribe' => 'Shipping Describe',
            'shippingPrice' => 'Shipping Price',
            'status' => 'Status',
        ];
    }
}
