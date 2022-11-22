<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Espacosverdes $model */

$this->title = 'Criar Espaços verdes';
$this->params['breadcrumbs'][] = ['label' => 'Espaços verdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="espacosverdes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
