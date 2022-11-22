<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qrcodes".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property string|null $redirecionamento
 */
class Qrcodes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qrcodes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['redirecionamento'], 'safe'],
            [['titulo', 'descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'redirecionamento' => 'Redirecionamento',
        ];
    }
}
