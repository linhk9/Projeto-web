<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Qrcodes $model */

$this->title = 'Criar Qrcodes';
$this->params['breadcrumbs'][] = ['label' => 'Qrcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qrcodes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
