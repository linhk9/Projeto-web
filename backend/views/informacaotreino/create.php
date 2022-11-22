<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Informacaotreino $model */

$this->title = 'Criar Informação de treino';
$this->params['breadcrumbs'][] = ['label' => 'Informação de treino', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informacaotreino-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
