<?php

use common\models\Informacaotreino;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InformacaotreinoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Informação de Treinos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacaotreino-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_planoTreino',
            'titulo',
            'descricao',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Informacaotreino $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
