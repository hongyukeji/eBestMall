<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ArticleCat;

/**
 * ArticleCatSearch represents the model behind the search form about `common\models\ArticleCat`.
 */
class ArticleCatSearch extends ArticleCat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleCatId', 'articleCatParentId'], 'integer'],
            [['articleCatName'], 'safe'],
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
        $query = ArticleCat::find();

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
            'articleCatId' => $this->articleCatId,
            'articleCatParentId' => $this->articleCatParentId,
        ]);

        $query->andFilterWhere(['like', 'articleCatName', $this->articleCatName]);

        return $dataProvider;
    }
}
