<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = 'Criar Utilizador';
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'form-createUser']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'firstName') ?>
    <?= $form->field($model, 'lastName') ?>
    <?= $form->field($model, 'telemovel') ?>
    <?= $form->field($model, 'morada') ?>


    <div class="form-group">
        <?= Html::submitButton('Criar Utilizador', ['class' => 'btn btn-primary', 'name' => 'createUser-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
