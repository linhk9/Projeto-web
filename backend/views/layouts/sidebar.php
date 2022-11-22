<?php

use yii\helpers\Html;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <span class="brand-text font-weight-light">Projeto - Ginasio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Html::encode(Yii::$app->user->identity->getName()) ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Gestão',
                        'icon' => 'tachometer-alt',
                        'items' => [
                            ['label' => 'Utilizadores', 'url' => ['userdata/index'], 'iconStyle' => 'far'],
                            ['label' => 'Espaços Verdes', 'url' => ['espacosverdes/index'], 'iconStyle' => 'far'],
                            ['label' => 'Informação de Treino', 'url' => ['informacaotreino/index'], 'iconStyle' => 'far'],
                            ['label' => 'Planos de Treino', 'url' => ['planotreino/index'], 'iconStyle' => 'far'],
                            ['label' => 'Subscrições', 'url' => ['subscricoes/index'], 'iconStyle' => 'far'],
                            ['label' => 'Produtos', 'url' => ['produto/index'], 'iconStyle' => 'far'],
                            ['label' => 'QRCode', 'url' => ['qrcodes/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    ['label' => 'Faturas',  'icon' => 'file-code', 'url' => ['fatura/index']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>