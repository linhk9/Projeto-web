<?php

use yii\grid\SerialColumn;
use common\models\Qrcodes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\QrcodesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Qrcodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qrcodes-index">

    <p>
<<<<<<< HEAD
        <?= Html::a('Criar Qrcodes', ['create'], ['class' => 'btn btn-success']) ?>
=======
        <?= Html::a('Criar Qrcode', ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> master
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'titulo',
            'descricao',
            'redirecionamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Qrcodes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
