<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Subscricoes $model */

$this->title = 'Alterar Subscrição: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subscrições', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="subscricoes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
