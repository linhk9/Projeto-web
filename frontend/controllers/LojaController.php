<?php

namespace frontend\controllers;

use common\models\Carrinho;
use common\models\Produto;
use common\models\Userdata;
use frontend\models\ProdutoSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LojaController implements the CRUD actions for Produto model.
 */
class LojaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
                [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                    [
                            'allow' => true,
                            'actions' => ['comprar'],
                            'roles' => ['comprarProduto'],
                        ],
                        [
                            'allow' => true,
                            'actions' => ['index', 'view'],
                            'roles' => ['cliente'],
                        ]
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Produto models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProdutoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionComprar($id)
    {
        if ($this->request->isPost) {
            $user = \Yii::$app->user->identity;
            $userdata = Userdata::findOne(['id_user' => $user->id]);

            if ($userdata) {
                $carrinhoModel = new Carrinho();

                $produto = Produto::findOne(['id' => $id]);
                $produtoCarrinho = Carrinho::findOne(['id_produto' => $id, 'id_userdata' => $userdata->id]);

                if ($produto->stock > 0) {
                    $carrinhoModel->id_produto = $id;
                    $carrinhoModel->id_userdata = $userdata->id;

                    if ($produtoCarrinho) {
                        if ($produtoCarrinho->quantidade < $produto->stock) {
                            ++$produtoCarrinho->quantidade;
                            $produtoCarrinho->save();
                        }
                    } else {
                        $carrinhoModel->quantidade = 1;
                        $carrinhoModel->save();
                    }
                }
            }
        }

        return $this->redirect(['index']);
    }

    /**
     * Displays a single Produto model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Produto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Produto();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Produto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Produto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Produto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produto::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
