<?php

namespace frontend\controllers;

use common\models\Carrinho;
use common\models\Fatura;
use common\models\FaturaProduto;
use common\models\Produto;
use common\models\User;
use common\models\Userdata;
use frontend\models\FaturaSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FaturaController implements the CRUD actions for Fatura model.
 */
class FaturaController extends Controller
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
                            'actions' => ['index', 'view', 'create'],
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
     * Lists all Fatura models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FaturaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fatura model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $faturaProdutos = FaturaProduto::findAll(['id_fatura' => $id]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'model2' => $faturaProdutos
        ]);
    }

    /**
     * Creates a new Fatura model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $user = \Yii::$app->user->identity;
        $userdata = Userdata::findOne(['id_user' => $user->id]);

        $fatura = new Fatura();
        $carrinho = Carrinho::find()->where(['id_userdata' => $userdata->id])->all();

        $fatura->id_userdata = $userdata->id;
        $fatura->data = time();

        $fatura->save();

        foreach ($carrinho as $item) {
            $faturaProduto = new FaturaProduto();
            $produto = Produto::findOne(['id' => $item->id_produto]);

            $faturaProduto->id_fatura = $fatura->id;
            $faturaProduto->id_produto = $item->id_produto;
            $faturaProduto->data = time();
            $faturaProduto->quantidade = $item->quantidade;
            $faturaProduto->preco = $produto->preco * $item->quantidade;

            $produto->stock -= $item->quantidade;

            $faturaProduto->save();
            $produto->save();

            $fatura->total += $faturaProduto->preco;
        }

        $fatura->save();

        Carrinho::deleteAll(['id_userdata' => $userdata->id]);

        return $this->redirect(['carrinho/index']);
    }

    /**
     * Updates an existing Fatura model.
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
     * Deletes an existing Fatura model.
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
     * Finds the Fatura model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Fatura the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fatura::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
