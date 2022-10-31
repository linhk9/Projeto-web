<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = 'Atualizar Utilizador: ' .  $model->firstName . " " . $model->lastName;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userdata-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
