<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Qrcodes $model */

$this->title = 'Create Qrcodes';
$this->params['breadcrumbs'][] = ['label' => 'Qrcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qrcodes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
