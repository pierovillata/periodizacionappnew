<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Perfilgeneral;

/**
 * PerfilgeneralSearch represents the model behind the search form of `app\models\Perfilgeneral`.
 */
class PerfilgeneralSearch extends Perfilgeneral
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_atleta', 'fcmax', 'fcreposo'], 'integer'],
            [['peso', 'altura', 'vo2max'], 'number'],
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
        $query = Perfilgeneral::find();

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
            'id_atleta' => $this->id_atleta,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'fcmax' => $this->fcmax,
            'fcreposo' => $this->fcreposo,
            'vo2max' => $this->vo2max,
        ]);

        return $dataProvider;
    }
}
