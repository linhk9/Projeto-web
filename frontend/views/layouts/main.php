<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

	<?php $this->beginBody() ?>

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left" style="color: white;">
                            <?= Html::encode(Yii::$app->name) ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12"><div class="top-middle"></div></div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <ul class="user-login">
                                <li>
                                    <?php
                                        if (Yii::$app->user->isGuest) {
                                            echo Html::a('Login', ['/site/login']);
                                        }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        if (Yii::$app->user->isGuest) {
                                            echo Html::a('Registo', ['/site/signup']);
                                        } else {
                                            echo Html::a('Logout (' . Yii::$app->user->identity->username . ')', ['/site/logout'], ['data-method' => 'post']);
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <?= Html::a('Home', ['/site/index']) ?>
                                    </li>
                                    <li class="nav-item">
                                        <?= Html::a('Subscricoes', ['/subscricoes/index']) ?>
                                    </li>
                                    <li class="nav-item">
                                        <?= Html::a('Loja', ['/loja/index']) ?>
                                    </li>
                                    <li class="nav-item">
                                        <?= Html::a('Planos de Treino', ['/planostreinos/index']) ?>
                                    </li>
                                    <li class="nav-item">
                                        <?= Html::a('Ajuda Nutricional', ['/ajudanutricional/index']) ?>
                                    </li>
                                    <li class="nav-item">
                                        <?= Html::a('Espaços Verdes', ['/espacosverdes/index']) ?>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->
    <br>

	<main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'] ?? [],
            ]) ?>
            <?= $content ?>
        </div>
    </main>

    <br>

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();