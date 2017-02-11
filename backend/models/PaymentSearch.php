<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Payment;

/**
 * PaymentSearch represents the model behind the search form about `common\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paymentId', 'status'], 'integer'],
            [['paymentName', 'paymentDescribe', 'paymentConfig'], 'safe'],
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
        $query = Payment::find();

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
            'paymentId' => $this->paymentId,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'paymentName', $this->paymentName])
            ->andFilterWhere(['like', 'paymentDescribe', $this->paymentDescribe])
            ->andFilterWhere(['like', 'paymentConfig', $this->paymentConfig]);

        return $dataProvider;
    }
}
