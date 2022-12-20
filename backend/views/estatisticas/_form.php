<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Estatisticas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estatisticas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_userdata')->textInput() ?>

    <?= $form->field($model, 'imc')->textInput() ?>

    <?= $form->field($model, 'idade')->textInput() ?>

    <?= $form->field($model, 'peso')->textInput() ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'tamanhoBiceps')->textInput() ?>

    <?= $form->field($model, 'tamanhoTriceps')->textInput() ?>

    <?= $form->field($model, 'tamanhoPeito')->textInput() ?>

    <?= $form->field($model, 'tamanhoAbdominal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
