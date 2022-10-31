<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subscricoes".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property float $preco
 *
 * @property Userdata[] $userdatas
 */
class Subscricoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscricoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'preco'], 'required'],
            [['preco'], 'float'],
            [['nome', 'descricao'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
        ];
    }

    /**
     * Gets query for [[Userdatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserdatas()
    {
        return $this->hasMany(Userdata::class, ['subscricao' => 'id']);
    }
}
