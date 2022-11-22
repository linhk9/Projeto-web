<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Planotreino $model */

$this->title = 'Alterar Plano de treino: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plano de treino', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="planotreino-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
