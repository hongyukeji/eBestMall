<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
 * ProductSearch represents the model behind the search form about `common\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'cat_id', 'sku_id_default', 'store_id', 'spu_sales_volume', 'comment', 'is_best', 'is_new', 'is_hot', 'sort_order', 'status', 'create_time', 'update_time'], 'integer'],
            [['product_name', 'product_describe', 'product_detail', 'product_cover', 'product_code'], 'safe'],
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
        $query = Product::find();

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
            'product_id' => $this->product_id,
            'cat_id' => $this->cat_id,
            'sku_id_default' => $this->sku_id_default,
            'store_id' => $this->store_id,
            'spu_sales_volume' => $this->spu_sales_volume,
            'comment' => $this->comment,
            'is_best' => $this->is_best,
            'is_new' => $this->is_new,
            'is_hot' => $this->is_hot,
            'sort_order' => $this->sort_order,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_describe', $this->product_describe])
            ->andFilterWhere(['like', 'product_detail', $this->product_detail])
            ->andFilterWhere(['like', 'product_cover', $this->product_cover])
            ->andFilterWhere(['like', 'product_code', $this->product_code]);

        return $dataProvider;
    }
}
