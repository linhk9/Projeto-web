<?php

namespace frontend\models;

use common\models\Userdata;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Carrinho;

/**
 * CarrinhoSearch represents the model behind the search form of `common\models\Carrinho`.
 */
class CarrinhoSearch extends Carrinho
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_userdata', 'id_produto', 'quantidade'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $user = \Yii::$app->user->identity;
        $userdata = Userdata::findOne(['id_user' => $user->id]);

        $query = Carrinho::find()->where(['id_userdata' => $userdata->id]);

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
            'id' => $this->id,
            'id_userdata' => $this->id_userdata,
            'id_produto' => $this->id_produto,
            'quantidade' => $this->quantidade,
        ]);

        return $dataProvider;
    }
}
