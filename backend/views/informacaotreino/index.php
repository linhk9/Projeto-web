<?php

use yii\grid\SerialColumn;
use common\models\Informacaotreino;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\InformacaotreinoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Informação de treinos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacaotreino-index">

    <p>
<<<<<<< HEAD
        <?= Html::a('Criar Informacao de treino', ['create'], ['class' => 'btn btn-success']) ?>
=======
        <?= Html::a('Criar Informacão de treino', ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> master
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

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
