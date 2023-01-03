<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Overzicht;

/**
 * UserSearch represents the model behind the search form of `frontend\models\Overzicht`.
 */
class UserSearch extends Overzicht
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Klantennummer', 'Medewerker', 'Uren', 'Bonusmwr'], 'integer'],
            [['Datum', 'Activiteit', 'Declarabel', 'Opmerkingen', 'Project'], 'safe'],
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
        $query = Overzicht::find();

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
            'Datum' => $this->Datum,
            'Klantennummer' => $this->Klantennummer,
            'Medewerker' => $this->Medewerker,
            'Uren' => $this->Uren,
            'Bonusmwr' => $this->Bonusmwr,
        ]);

        $query->andFilterWhere(['like', 'Activiteit', $this->Activiteit])
            ->andFilterWhere(['like', 'Declarabel', $this->Declarabel])
            ->andFilterWhere(['like', 'Opmerkingen', $this->Opmerkingen])
            ->andFilterWhere(['like', 'Project', $this->Project]);

        return $dataProvider;
    }
}
