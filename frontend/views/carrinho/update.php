<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Carrinho $model */

$this->title = 'Alterar Carrinho: #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Carrinho', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="carrinho-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
