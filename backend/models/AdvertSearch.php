<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advert;

/**
 * AdvertSearch represents the model behind the search form about `common\models\Advert`.
 */
class AdvertSearch extends Advert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['advertId'], 'integer'],
            [['advertName', 'advertCode', 'advertLocation', 'advertImage', 'advertUrl'], 'safe'],
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
        $query = Advert::find();

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
            'advertId' => $this->advertId,
        ]);

        $query->andFilterWhere(['like', 'advertName', $this->advertName])
            ->andFilterWhere(['like', 'advertCode', $this->advertCode])
            ->andFilterWhere(['like', 'advertLocation', $this->advertLocation])
            ->andFilterWhere(['like', 'advertImage', $this->advertImage])
            ->andFilterWhere(['like', 'advertUrl', $this->advertUrl]);

        return $dataProvider;
    }
}
