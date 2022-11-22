<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Espacosverdes;

/**
 * EspacosverdesSearch represents the model behind the search form of `common\models\Espacosverdes`.
 */
class EspacosverdesSearch extends Espacosverdes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'disponivel'], 'integer'],
            [['zona'], 'safe'],
            [['latitude', 'longitude', 'altitude'], 'number'],
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
        $query = Espacosverdes::find();

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
            'disponivel' => $this->disponivel,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'altitude' => $this->altitude,
        ]);

        $query->andFilterWhere(['like', 'zona', $this->zona]);

        return $dataProvider;
    }
}
