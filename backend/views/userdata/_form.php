<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="userdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telemovel')->textInput() ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_subscricao')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Subscricoes::find()->asArray()->all(), 'id', 'nome')) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
