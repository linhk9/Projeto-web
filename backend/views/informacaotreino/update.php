<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Informacaotreino $model */

$this->title = 'Alterar Informação de treino: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informação de treino', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="informacaotreino-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
