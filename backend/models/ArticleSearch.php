<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Article;

/**
 * ArticleSearch represents the model behind the search form about `common\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleId', 'articleCatId', 'articleAuthorAdminUserId', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['articleTitle', 'articleContent'], 'safe'],
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
        $query = Article::find();

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
            'articleId' => $this->articleId,
            'articleCatId' => $this->articleCatId,
            'articleAuthorAdminUserId' => $this->articleAuthorAdminUserId,
            'status' => $this->status,
            'createdTime' => $this->createdTime,
            'updatedTime' => $this->updatedTime,
        ]);

        $query->andFilterWhere(['like', 'articleTitle', $this->articleTitle])
            ->andFilterWhere(['like', 'articleContent', $this->articleContent]);

        return $dataProvider;
    }
}
