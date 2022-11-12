<?php
$this->title = 'Back Office - Projeto';
$this->params['breadcrumbs'] = [['label' => $this->title]];
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
    </div>
</div>