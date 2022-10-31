<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = 'Criar Utilizador';
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
