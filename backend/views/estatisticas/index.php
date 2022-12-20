<?php

use common\models\Estatisticas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\EstatisticasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Estatísticas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estatisticas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_userdata',
            'imc',
            'idade',
            'peso',
            'altura',
            'tamanhoBiceps',
            'tamanhoTriceps',
            'tamanhoPeito',
            'tamanhoAbdominal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Estatisticas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
