<?php

use common\models\Userdata;
use yii\grid\SerialColumn;
use common\models\Fatura;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\FaturaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Faturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fatura-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::class],
            [
                    'label' => 'Cliente',
                    'value' => function($model){
                        $userdata = Userdata::find()->where(['id' => $model->id_userdata])->one();
                        return $userdata->firstName . ' ' . $userdata->lastName;
                    }
            ],
            [
                    'label' => 'Data',
                    'value' => function($model){
                        return date('m/d/Y H:i:s', $model->data);
                    }
            ],
            [
                    'label' => 'total',
                    'value' => function($model){
                        return $model->total . ' €';
                    }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Fatura $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
