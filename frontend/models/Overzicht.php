<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "overzicht".
 *
 * @property int $ID
 * @property string $Datum
 * @property int $Klanten_id
 * @property string $Medewerker
 * @property string $Activiteit
 * @property int $Uren
 * @property string $Declarabel
 * @property string $Opmerkingen
 * @property string $Project
 *
 * @property Klanten $klanten
 */
class Overzicht extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'overzicht';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Datum', 'Klanten_id', 'Medewerker', 'Activiteit', 'Uren', 'Declarabel', 'Opmerkingen', 'Project'], 'required'],
            [['Datum'], 'safe'],
            [['Klanten_id', 'Uren'], 'integer'],
            [['Medewerker'], 'string', 'max' => 20],
            [['Activiteit', 'Declarabel', 'Opmerkingen', 'Project'], 'string', 'max' => 999],
            [['Klanten_id'], 'exist', 'skipOnError' => true, 'targetClass' => Klanten::class, 'targetAttribute' => ['Klanten_id' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Datum' => 'Datum',
            'klanten.klantennaam' => 'Klantennaam',
            'Medewerker' => 'Medewerker',
            'Activiteit' => 'Activiteit',
            'Uren' => 'Uren',
            'Declarabel' => 'Declarabel',
            'Opmerkingen' => 'Opmerkingen',
            'Project' => 'Project',
        ];
    }

    /**
     * Gets query for [[Klanten]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKlanten()
    {
        return $this->hasOne(Klanten::class, ['ID' => 'Klanten_id']);
    }
}
