<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fatura".
 *
 * @property int $id
 * @property int|null $id_userdata
 * @property int|null $data
 * @property float|null $total
 *
 * @property FaturaProduto[] $faturaProdutos
 * @property Userdata $userdata
 */
class Fatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_userdata', 'data'], 'integer'],
            [['total'], 'number'],
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
            'data' => 'Data',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[FaturaProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaProdutos()
    {
        return $this->hasMany(FaturaProduto::class, ['id_fatura' => 'id']);
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
