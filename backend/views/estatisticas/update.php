<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Estatisticas $model */

$this->title = 'Alterar Estatísticas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estatisticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="estatisticas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
