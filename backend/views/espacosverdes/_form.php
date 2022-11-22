<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Espacosverdes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="espacosverdes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'zona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disponivel')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'altitude')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
