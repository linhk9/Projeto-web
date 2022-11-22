<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "espacosverdes".
 *
 * @property int $id
 * @property string|null $zona
 * @property int|null $disponivel
 * @property float|null $latitude
 * @property float|null $longitude
 * @property float|null $altitude
 */
class Espacosverdes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'espacosverdes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disponivel'], 'integer'],
            [['latitude', 'longitude', 'altitude'], 'number'],
            [['zona'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zona' => 'Zona',
            'disponivel' => 'Disponivel',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'altitude' => 'Altitude',
        ];
    }
}
