<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Goods;

/**
 * GoodsSearch represents the model behind the search form about `common\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodsId', 'goodsNumber', 'goodsSalesVolume', 'goodsStatus', 'createdTime', 'updatedTime'], 'integer'],
            [['goodsName', 'goodsBrief', 'goodsImage', 'goodsIntroduce'], 'safe'],
            [['goodsPrice', 'goodsMarketPrice'], 'number'],
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
        $query = Goods::find();

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
            'goodsId' => $this->goodsId,
            'goodsPrice' => $this->goodsPrice,
            'goodsMarketPrice' => $this->goodsMarketPrice,
            'goodsNumber' => $this->goodsNumber,
            'goodsSalesVolume' => $this->goodsSalesVolume,
            'goodsStatus' => $this->goodsStatus,
            'createdTime' => $this->createdTime,
            'updatedTime' => $this->updatedTime,
        ]);

        $query->andFilterWhere(['like', 'goodsName', $this->goodsName])
            ->andFilterWhere(['like', 'goodsBrief', $this->goodsBrief])
            ->andFilterWhere(['like', 'goodsImage', $this->goodsImage])
            ->andFilterWhere(['like', 'goodsIntroduce', $this->goodsIntroduce]);

        return $dataProvider;
    }
}
