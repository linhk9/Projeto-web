<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property int $id
 * @property int $user_id
 * @property string $firstName
 * @property string $lastName
 * @property int $telemovel
 * @property string $morada
 * @property int $subscricao
 *
 * @property Subscricoes $subscricao0
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
            [['user_id', 'firstName', 'lastName', 'telemovel', 'morada'], 'required'],
            [['user_id', 'telemovel', 'subscricao'], 'integer'],
            [['firstName', 'lastName', 'morada'], 'string', 'max' => 255],
            [['subscricao'], 'exist', 'skipOnError' => true, 'targetClass' => Subscricoes::class, 'targetAttribute' => ['subscricao' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'telemovel' => 'Telemovel',
            'morada' => 'Morada',
            'subscricao' => 'Subscricao',
        ];
    }

    /**
     * Gets query for [[Subscricao]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubscricao()
    {
        return $this->hasOne(Subscricoes::class, ['id' => 'subscricao']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
