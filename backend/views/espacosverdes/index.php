<?php

use yii\grid\SerialColumn;
use common\models\Espacosverdes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\EspacosverdesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Espaços verdes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="espacosverdes-index">

    <p>
        <?= Html::a('Criar Espaço Verde', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'zona',
            'disponivel',
            'latitude',
            'longitude',
            'altitude',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Espacosverdes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
