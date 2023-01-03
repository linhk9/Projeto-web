<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Fatura $model */
/** @var common\models\FaturaProduto $model2 */

$this->title = 'Fatura #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Faturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fatura-view">

<!--    --><?php //= DetailView::widget([
//        'model' => $model,
//        'attributes' => [
//            'id',
//            'id_userdata',
//            'data',
//            'total',
//        ],
//    ]) ?>

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2">
                        <div class="d-flex flex-column"> <span class="font-weight-bold">Fatura</span> <small>ID-<?= $model->id ?></small> </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="add">
                                <td>De</td>
                                <td>Para</td>
                            </tr>
                            <tr class="content">
                                <td class="font-weight-bold">Projeto - Ginásio <br>Portugal</td>
                                <td class="font-weight-bold"><?= $model->userdata->firstName . ' ' . $model->userdata->lastName ?> <br> <?= $model->userdata->morada ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="add">
                                <td>Nome</td>
                                <td>Data</td>
                                <td>Quantidade</td>
                                <td class="text-center">Total</td>
                            </tr>
                            <?php
                                foreach ($model2 as $item) {
                                    echo '<tr class="content">
                                            <td class="font-weight-bold">' . $item->produto->nome . '</td>
                                            <td>' . date('m/d/Y H:i:s', $item->data) . '</td>
                                            <td>' . $item->quantidade . '</td>
                                            <td class="text-center">' . $item->preco . ' €</td>
                                        </tr>';
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>
                            <tr class="add">
                                <td>Data de Emissão</td>
                                <td>Total</td>
                            </tr>
                            <tr class="content">
                                <td><?= date('m/d/Y H:i:s', $model->data) ?> </td>
                                <td><?= $model->total ?> €</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
