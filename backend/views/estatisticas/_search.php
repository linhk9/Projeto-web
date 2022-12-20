<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\EstatisticasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estatisticas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_userdata') ?>

    <?= $form->field($model, 'imc') ?>

    <?= $form->field($model, 'idade') ?>

    <?= $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'altura') ?>

    <?php // echo $form->field($model, 'tamanhoBiceps') ?>

    <?php // echo $form->field($model, 'tamanhoTriceps') ?>

    <?php // echo $form->field($model, 'tamanhoPeito') ?>

    <?php // echo $form->field($model, 'tamanhoAbdominal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
