<?php

use common\models\User;
use yii\grid\SerialColumn;
use common\models\Userdata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserdataSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gestão de Utilizadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-index">

    <p>
        <?= Html::a('Criar Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],
            'firstName',
            'lastName',
            'telemovel',
            'morada',
            [
                'label' => 'Subscrição',
                'value' => function($model) {
                    return $model->subscricao->nome;
                }
            ],
            [
                'label' => 'Status',
                'value' => function($model) {
                    if ($model->user->status === User::STATUS_ACTIVE) {
                        return 'Ativo';
                    }

                    if ($model->user->status === User::STATUS_DELETED) {
                        return 'Apagado';
                    }

                    return 'Inativo';
                }
            ],


            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Userdata $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
