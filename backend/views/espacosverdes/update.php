<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Espacosverdes $model */

$this->title = 'Alterar Espaços verdes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Espaços verdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="espacosverdes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
