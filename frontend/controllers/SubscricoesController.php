<?php

namespace frontend\controllers;

use common\models\Subscricoes;
use common\models\Userdata;
use frontend\models\SubscricoesSearch;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubscricoesController implements the CRUD actions for Subscricoes model.
 */
class SubscricoesController extends Controller
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
                            'roles' => ['comprarSubscricao'],
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
     * Lists all Subscricoes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SubscricoesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Subscricoes model.
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

    public function actionComprar($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $user = Yii::$app->user->identity;
            $userData = Userdata::findOne(['id_user' => $user->id]);
            $userData->id_subscricao = $model->id;
            $userData->save();
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Subscricoes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Subscricoes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subscricoes::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Esta página não existe.');
    }
}
