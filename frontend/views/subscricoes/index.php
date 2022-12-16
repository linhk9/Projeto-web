<?php

use common\models\Subscricoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SubscricoesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subscrições';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscricoes-index">

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Subscrições</h2>
                        <p>Em baixo poderás ver e comprar as várias subscrições existentes no nosso ginásio!</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                    foreach ($dataProvider->getModels() as $subscricao) {
                        echo '
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-info">
                                        <h4 class="title">
                                            <a href="product-grids.html">' . $subscricao->nome .'</a>
                                        </h4>
                                        <ul class="review">
                                            <li>' . $subscricao->descricao .'</li>
                                        </ul>
                                        <div class="price">
                                            <span>' . $subscricao->preco .'</span>
                                        </div>
                                        <br>
                                        <div class="button align-center">
                                            ' . Html::a('Comprar', ['/subscricoes/view', 'id' => $subscricao->id], ['data-method' => 'post', 'class' => 'btn']) .'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>

            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->


</div>
