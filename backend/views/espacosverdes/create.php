<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Espacosverdes $model */

$this->title = 'Create Espacosverdes';
$this->params['breadcrumbs'][] = ['label' => 'Espacosverdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="espacosverdes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
