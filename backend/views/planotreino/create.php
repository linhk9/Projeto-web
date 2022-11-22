<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Planotreino $model */

$this->title = 'Criar Plano de treino';
$this->params['breadcrumbs'][] = ['label' => 'Plano de treino', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planotreino-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
