<?php

use common\models\Produto;
use yii\grid\SerialColumn;
use common\models\Carrinho;
use common\models\Userdata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CarrinhoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Carrinho';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrinho-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::class],

            [
                'label' => 'Cliente',
                'value' => function($model) {
                    $userdata = Userdata::find()->where(['id' => $model->id_userdata])->one();
                    return $userdata->firstName . ' ' . $userdata->lastName;
                }
            ],
            [
                'label' => 'Produto',
                'value' => function($model) {
                    $produto = Produto::find()->where(['id' => $model->id_produto])->one();
                    return $produto->nome;
                }
            ],
            'quantidade',
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Carrinho $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <div class="button align-center">
        <?= Html::a('Finalizar Compra', ['/fatura/create'], ['data-method' => 'post', 'class' => 'btn']) ?>
    </div>
</div>
