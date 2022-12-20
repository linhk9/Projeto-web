<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property int $id
 * @property int $id_user
 * @property string $firstName
 * @property string $lastName
 * @property int $telemovel
 * @property string $morada
 * @property int $id_subscricao
 *
 * @property Carrinho[] $carrinhos
 * @property Estatisticas[] $estatisticas
 * @property Fatura[] $faturas
 * @property Planotreinopersonalizado[] $planotreinopersonalizados
 * @property Subscricoes $subscricao
 * @property User $user
 */
class Userdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'firstName', 'lastName', 'telemovel', 'morada'], 'required'],
            [['id_user', 'telemovel', 'id_subscricao'], 'integer'],
            [['firstName', 'lastName', 'morada'], 'string', 'max' => 255],
            [['id_subscricao'], 'exist', 'skipOnError' => true, 'targetClass' => Subscricoes::class, 'targetAttribute' => ['id_subscricao' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'telemovel' => 'Telemovel',
            'morada' => 'Morada',
            'id_subscricao' => 'Id Subscricao',
        ];
    }

    /**
     * Gets query for [[Carrinhos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhos()
    {
        return $this->hasMany(Carrinho::class, ['id_userdata' => 'id']);
    }

    /**
     * Gets query for [[Estatisticas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstatisticas()
    {
        return $this->hasMany(Estatisticas::class, ['id_userdata' => 'id_user']);
    }

    public function getEstatisticasId()
    {
        $estatistica = Estatisticas::find()->where(['id_userdata' => $this->id_user])->one();

        return $estatistica->id;
    }

    /**
     * Gets query for [[Faturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturas()
    {
        return $this->hasMany(Fatura::class, ['id_userdata' => 'id']);
    }

    /**
     * Gets query for [[Planotreinopersonalizados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanotreinopersonalizados()
    {
        return $this->hasMany(Planotreinopersonalizado::class, ['id_userdata' => 'id']);
    }

    /**
     * Gets query for [[Subscricao]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubscricao()
    {
        return $this->hasOne(Subscricoes::class, ['id' => 'id_subscricao']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
