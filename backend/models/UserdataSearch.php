<?php

namespace app\models;

use common\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Userdata;

/**
 * UserdataSearch represents the model behind the search form of `common\models\Userdata`.
 */
class UserdataSearch extends Userdata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'telemovel', 'subscricao'], 'integer'],
            [['firstName', 'lastName', 'morada'], 'safe'],
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
        $query = Userdata::find();

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
            'user_id' => $this->user_id,
            'telemovel' => $this->telemovel,
            'subscricao' => $this->subscricao,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'morada', $this->morada]);

        return $dataProvider;
    }
}
