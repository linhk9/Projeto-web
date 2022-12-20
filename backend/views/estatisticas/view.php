<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Estatisticas $model */

$this->title = 'Ver Estatísticas ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estatísticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Ver';
\yii\web\YiiAsset::register($this);
?>
<div class="estatisticas-view">

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_userdata',
            'imc',
            'idade',
            'peso',
            'altura',
            'tamanhoBiceps',
            'tamanhoTriceps',
            'tamanhoPeito',
            'tamanhoAbdominal',
        ],
    ]) ?>

</div>
