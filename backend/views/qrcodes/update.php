<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Qrcodes $model */

$this->title = 'Alterar Qrcodes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Qrcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="qrcodes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
