<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "informacaotreino".
 *
 * @property int $id
 * @property int|null $id_planoTreino
 * @property string|null $titulo
 * @property string|null $descricao
 *
 * @property Planotreino $planoTreino
 */
class Informacaotreino extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informacaotreino';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_planoTreino'], 'integer'],
            [['titulo'], 'string', 'max' => 45],
            [['descricao'], 'string', 'max' => 255],
            [['id_planoTreino'], 'exist', 'skipOnError' => true, 'targetClass' => Planotreino::class, 'targetAttribute' => ['id_planoTreino' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_planoTreino' => 'Id Plano Treino',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[PlanoTreino]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanoTreino()
    {
        return $this->hasOne(Planotreino::class, ['id' => 'id_planoTreino']);
    }
}
