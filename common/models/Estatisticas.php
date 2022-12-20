<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "estatisticas".
 *
 * @property int $id
 * @property int|null $id_userdata
 * @property float|null $imc
 * @property int|null $idade
 * @property float|null $peso
 * @property float|null $altura
 * @property float|null $tamanhoBiceps
 * @property float|null $tamanhoTriceps
 * @property float|null $tamanhoPeito
 * @property float|null $tamanhoAbdominal
 *
 * @property Userdata $userdata
 */
class Estatisticas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estatisticas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_userdata', 'idade'], 'integer'],
            [['imc', 'peso', 'altura', 'tamanhoBiceps', 'tamanhoTriceps', 'tamanhoPeito', 'tamanhoAbdominal'], 'number'],
            [['id_userdata'], 'exist', 'skipOnError' => true, 'targetClass' => Userdata::class, 'targetAttribute' => ['id_userdata' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_userdata' => 'Id Userdata',
            'imc' => 'Imc',
            'idade' => 'Idade',
            'peso' => 'Peso',
            'altura' => 'Altura',
            'tamanhoBiceps' => 'Tamanho Biceps',
            'tamanhoTriceps' => 'Tamanho Triceps',
            'tamanhoPeito' => 'Tamanho Peito',
            'tamanhoAbdominal' => 'Tamanho Abdominal',
        ];
    }

    /**
     * Gets query for [[Userdata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserdata()
    {
        return $this->hasOne(Userdata::class, ['id' => 'id_userdata']);
    }
}
