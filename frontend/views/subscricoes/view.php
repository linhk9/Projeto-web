<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Subscricoes $model */

$this->title = 'Compra da Subscrição ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Subscricoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subscricoes-view">
    <h1 class="align-center"><?= Html::encode($this->title) ?></h1>

    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <h5><a> Tipo de Subscrição: <?= $model->nome ?></a></h5>
            <a> Descrição da Subscrição: <?= $model->descricao ?>.</a>
            <br>
            <a> Preço da Subscrição: <?= $model->preco ?> €</a>

            <br>
            <br>
                <?= Html::a('Comprar', ['comprar', 'id' => $model->id], [
                    'class' => 'btn btn-primary',
                    'data' => [
                        'confirm' => 'Tens a certeza de que queres comprar esta subscrição?',
                        'method' => 'post',
                    ],
                ]) ?>
        </div>
    </section>

</div>
