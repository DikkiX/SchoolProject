<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Klanten;

/**
 * KlantenSearch represents the model behind the search form of `backend\models\Klanten`.
 */
class KlantenSearch extends Klanten
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'telefoonnummer'], 'integer'],
            [['klantennaam', 'Adress', 'Opmerkingen'], 'safe'],
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
        $query = Klanten::find();

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
            'ID' => $this->ID,
            'telefoonnummer' => $this->telefoonnummer,
        ]);

        $query->andFilterWhere(['like', 'klantennaam', $this->klantennaam])
            ->andFilterWhere(['like', 'Adress', $this->Adress])
            ->andFilterWhere(['like', 'Opmerkingen', $this->Opmerkingen]);

        return $dataProvider;
    }
}
