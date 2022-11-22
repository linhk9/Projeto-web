<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Subscricoes $model */

$this->title = 'Criar Subscrição';
$this->params['breadcrumbs'][] = ['label' => 'Subscrições', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscricoes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
