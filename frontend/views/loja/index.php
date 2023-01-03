<?php

use yii\grid\SerialColumn;
use common\models\Produto;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ProdutoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Produtos</h2>
                        <p>Em baixo poderás ver e adicionar produtos ao teu carrinho!</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                foreach ($dataProvider->getModels() as $produto) {
                    echo '
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-info">
                                        <h4 class="title">
                                            <a>' . $produto->nome .'</a>
                                        </h4>
                                        <ul class="review">
                                            <li>' . $produto->descricao .'</li>
                                            <br><li>Stock: ' . $produto->stock .'</li>
                                        </ul>
                                        <div class="price">
                                            <span>' . $produto->preco .' €</span>
                                        </div>
                                        <br>
                                        <div class="button align-center">
                                            ' . Html::a('Add Carrinho', ['comprar', 'id' => $produto->id], [
                                                'class' => 'btn btn-primary',
                                                'data' => [
                                                    'confirm' => 'Tens a certeza de que queres comprar esta subscrição?',
                                                    'method' => 'post',
                                                ],
                                            ]).'
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
