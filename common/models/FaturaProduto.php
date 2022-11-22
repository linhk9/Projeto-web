<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fatura_produto".
 *
 * @property int $id
 * @property int|null $id_fatura
 * @property int|null $id_produto
 * @property int|null $data
 * @property int|null $quantidade
 * @property float|null $preco
 *
 * @property Fatura $fatura
 * @property Produto $produto
 */
class FaturaProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatura_produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fatura', 'id_produto', 'data', 'quantidade'], 'integer'],
            [['preco'], 'number'],
            [['id_fatura'], 'exist', 'skipOnError' => true, 'targetClass' => Fatura::class, 'targetAttribute' => ['id_fatura' => 'id']],
            [['id_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::class, 'targetAttribute' => ['id_produto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_fatura' => 'Id Fatura',
            'id_produto' => 'Id Produto',
            'data' => 'Data',
            'quantidade' => 'Quantidade',
            'preco' => 'Preco',
        ];
    }

    /**
     * Gets query for [[Fatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFatura()
    {
        return $this->hasOne(Fatura::class, ['id' => 'id_fatura']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::class, ['id' => 'id_produto']);
    }
}
