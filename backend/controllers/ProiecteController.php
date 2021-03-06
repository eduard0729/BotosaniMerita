<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\Proiecte;
use common\models\ProiecteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProiecteController implements the CRUD actions for Proiecte model.
 */
class ProiecteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'update','upd', 'view', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'update','upd', 'view', 'create'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'update','upd', 'view', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Proiecte models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProiecteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proiecte model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Proiecte model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $proiecte = new Proiecte();

        if ($proiecte->load(Yii::$app->request->post()) && $proiecte->save()) {
            return $this->redirect(['view', 'id' => $proiecte->id]);
        } else {
            return $this->render('create', [
                'model' => $proiecte,
            ]);
        }
    }

    /**
     * Updates an existing Proiecte model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $proiecte = $this->findModel($id);

        if ($proiecte->load(Yii::$app->request->post()) && $proiecte->save()) {
            return $this->redirect(['view', 'id' => $proiecte->id]);
        } else {
            return $this->render('update', [
                'model' => $proiecte,
            ]);
        }
    }

    /**
     * Deletes an existing Proiecte model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Proiecte model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proiecte the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($proiecte = Proiecte::findOne($id)) !== null) {
            return $proiecte;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
