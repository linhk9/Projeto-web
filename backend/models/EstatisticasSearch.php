<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Estatisticas;

/**
 * EstatisticasSearch represents the model behind the search form of `common\models\Estatisticas`.
 */
class EstatisticasSearch extends Estatisticas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_userdata', 'idade'], 'integer'],
            [['imc', 'peso', 'altura', 'tamanhoBiceps', 'tamanhoTriceps', 'tamanhoPeito', 'tamanhoAbdominal'], 'number'],
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
        $query = Estatisticas::find();

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
            'imc' => $this->imc,
            'idade' => $this->idade,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'tamanhoBiceps' => $this->tamanhoBiceps,
            'tamanhoTriceps' => $this->tamanhoTriceps,
            'tamanhoPeito' => $this->tamanhoPeito,
            'tamanhoAbdominal' => $this->tamanhoAbdominal,
        ]);

        return $dataProvider;
    }
}
