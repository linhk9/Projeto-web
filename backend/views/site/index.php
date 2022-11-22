<?php
$this->title = 'Back Office - Ginasio';
$this->params['breadcrumbs'] = [['label' => $this->title]];

/** @var backend\controllers\SiteController $usersTotais */
/** @var backend\controllers\SiteController $produtosTotais */
/** @var backend\controllers\SiteController $faturasTotais */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Utilizadores',
                'number' => $usersTotais,
                'icon' => 'far fa-user',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Produtos',
                'number' => $produtosTotais,
                'icon' => 'far fa-user',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Faturas',
                'number' => $faturasTotais,
                'icon' => 'far fa-user',
            ]) ?>
        </div>
    </div>
</div>