<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Informacaotreino $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="informacaotreino-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_planoTreino')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Planotreino::find()->asArray()->all(), 'id', 'tipo')) ?>


    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
