<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Qrcodes $model */

$this->title = 'Update Qrcodes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Qrcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qrcodes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
