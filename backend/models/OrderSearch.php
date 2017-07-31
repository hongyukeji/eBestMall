<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form about `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderId', 'UserId', 'AddressId', 'shippingId', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['orderAmount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'orderId' => $this->orderId,
            'UserId' => $this->UserId,
            'AddressId' => $this->AddressId,
            'orderAmount' => $this->orderAmount,
            'shippingId' => $this->shippingId,
            'status' => $this->status,
            'createdTime' => $this->createdTime,
            'updatedTime' => $this->updatedTime,
        ]);

        return $dataProvider;
    }
}
