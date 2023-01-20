<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Overzicht;

/**
 * OverzichtSearch represents the model behind the search form of `frontend\models\Overzicht`.
 */
class OverzichtSearch extends Overzicht
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Klanten_id', 'Medewerker', 'Uren', 'Bonusmwr'], 'integer'],
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
        //Session voor Fpdf extension op reserveringpagina
        $_SESSION['exportData'] = new ActiveDataProvider([
            'query' => $query,
            'sort' => false,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        //FPDF code extension
        unset($_SESSION['exportData']);

        $_SESSION['exportData'] = $dataProvider;

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'Datum' => $this->Datum,
            'Klanten_id' => $this->Klanten_id,
            'klanten.klantennaam' => $this->klanten,
            'Medewerker' => $this->Medewerker,
            'Uren' => $this->Uren,
        ]);

        $query->andFilterWhere(['like', 'Activiteit', $this->Activiteit])
            ->andFilterWhere(['like', 'Declarabel', $this->Declarabel])
            ->andFilterWhere(['like', 'Opmerkingen', $this->Opmerkingen])
            ->andFilterWhere(['like', 'Project', $this->Project]);

        return $dataProvider;
    }

     //FPDF function
     public static function getExportData() 
     {
         $data = [
                 'data'=>$_SESSION['exportData'],
                 'fileName'=>'Report', 
                 'title'=>'Report',
                 'exportFile'=>'/overzicht/exportoverzicht',
             ];

         return $data;

     }
}
