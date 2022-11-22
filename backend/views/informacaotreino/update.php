<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Informacaotreino $model */

$this->title = 'Update Informacaotreino: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informacaotreinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informacaotreino-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
