<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "planotreinopersonalizado".
 *
 * @property int $id
 * @property int|null $id_userdata
 * @property string|null $tipo
 * @property string|null $descricao
 * @property int|null $duracao
 * @property int|null $repeticoes
 *
 * @property Userdata $userdata
 */
class Planotreinopersonalizado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planotreinopersonalizado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_userdata', 'duracao', 'repeticoes'], 'integer'],
            [['tipo'], 'string', 'max' => 45],
            [['descricao'], 'string', 'max' => 255],
            [['id_userdata'], 'exist', 'skipOnError' => true, 'targetClass' => Userdata::class, 'targetAttribute' => ['id_userdata' => 'id']],
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
            'tipo' => 'Tipo',
            'descricao' => 'Descricao',
            'duracao' => 'Duracao',
            'repeticoes' => 'Repeticoes',
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
