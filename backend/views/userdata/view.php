<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = $model->firstName . " " . $model->lastName . " | " . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userdata-view">

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tens a certeza de que queres apagar este utilizador?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Estatísticas', ['/estatisticas/view', 'id' => $model->getEstatisticasId()], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'id_user',
            'firstName',
            'lastName',
            'telemovel',
            'morada',
            'id_subscricao',
        ],
    ]) ?>

</div>
