<?php

use yii\grid\SerialColumn;
use common\models\Planotreino;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PlanotreinoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Planos de treinos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planotreino-index">

    <p>
<<<<<<< HEAD
        <?= Html::a('Criar Plano de treino', ['create'], ['class' => 'btn btn-success']) ?>
=======
        <?= Html::a('Criar Plano de Treino', ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> master
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'tipo',
            'descricao',
            'duracao',
            'repeticoes',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Planotreino $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
