<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "klanten".
 *
 * @property int $ID
 * @property string $klantennaam
 * @property int $telefoonnummer
 * @property string $Adress
 * @property string $Opmerkingen
 *
 * @property Overzicht[] $overzichts
 */
class Klanten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klanten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'klantennaam', 'telefoonnummer', 'Adress',], 'required'],
            [['ID', 'telefoonnummer'], 'integer'],
            [['klantennaam'], 'string', 'max' => 20],
            [['Adress'], 'string', 'max' => 60],
            [['Opmerkingen'], 'string', 'max' => 60],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'klantennaam' => 'Klantennaam',
            'telefoonnummer' => 'Telefoonnummer',
            'Adress' => 'Adress',
            'Opmerkingen' => 'Opmerkingen',
        ];
    }

    /**
     * Gets query for [[Overzichts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOverzichts()
    {
        return $this->hasMany(Overzicht::class, ['Klanten_id' => 'ID']);
    }

    public function getDisplayName()
    {
        return $this->klantennaam;
    }
}
