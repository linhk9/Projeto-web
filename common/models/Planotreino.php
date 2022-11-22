<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "planotreino".
 *
 * @property int $id
 * @property string|null $tipo
 * @property string|null $descricao
 * @property int|null $duracao
 * @property int|null $repeticoes
 *
 * @property Informacaotreino[] $informacaotreinos
 */
class Planotreino extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planotreino';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['duracao', 'repeticoes'], 'integer'],
            [['tipo'], 'string', 'max' => 45],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'descricao' => 'Descricao',
            'duracao' => 'Duracao',
            'repeticoes' => 'Repeticoes',
        ];
    }

    /**
     * Gets query for [[Informacaotreinos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformacaotreinos()
    {
        return $this->hasMany(Informacaotreino::class, ['id_planoTreino' => 'id']);
    }
}
