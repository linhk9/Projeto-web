<?php

use yii\grid\SerialColumn;
use common\models\Subscricoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SubscricoesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subscrições';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscricoes-index">

    <p>
        <?= Html::a('Criar Subscrição', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'nome',
            'descricao',
            'preco',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Subscricoes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
