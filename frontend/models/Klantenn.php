<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "klanten1".
 *
 * @property int $ID
 * @property int $Naam
 * @property int $winkel
 */
class Klantenn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klanten1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Naam', 'winkel'], 'required'],
            [['Naam', 'winkel'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Naam' => 'Naam',
            'winkel' => 'Winkel',
        ];
    }
}
