<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Shipping;

/**
 * ShippingSearch represents the model behind the search form about `common\models\Shipping`.
 */
class ShippingSearch extends Shipping
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shippingId', 'shippingPrice', 'status'], 'integer'],
            [['shippingName', 'shippingDescribe'], 'safe'],
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
        $query = Shipping::find();

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
            'shippingId' => $this->shippingId,
            'shippingPrice' => $this->shippingPrice,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'shippingName', $this->shippingName])
            ->andFilterWhere(['like', 'shippingDescribe', $this->shippingDescribe]);

        return $dataProvider;
    }
}
