<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $descricao
 * @property int|null $stock
 * @property float|null $preco
 *
 * @property Carrinho[] $carrinhos
 * @property FaturaProduto[] $faturaProdutos
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stock'], 'integer'],
            [['preco'], 'number'],
            [['nome'], 'string', 'max' => 45],
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
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'stock' => 'Stock',
            'preco' => 'Preco',
        ];
    }

    /**
     * Gets query for [[Carrinhos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhos()
    {
        return $this->hasMany(Carrinho::class, ['id_produto' => 'id']);
    }

    /**
     * Gets query for [[FaturaProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaProdutos()
    {
        return $this->hasMany(FaturaProduto::class, ['id_produto' => 'id']);
    }
}
