<?php

namespace backend\controllers;

use Yii;
use common\models\Management;
use backend\models\ManagementSearch;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use vova07\fileapi\actions\UploadAction as FileAPIUpload;
use backend\models\forms\ImageForm;
use common\models\Attachments;
use yii\web\Response;
use yii\web\ConflictHttpException;

/**
 * ManagementController implements the CRUD actions for Management model.
 */
class ManagementController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'img-upload' => [
                'class' => FileAPIUpload::className(),
                'path' => '@static/temp/'
            ],
        ];
    }


    /**
     * Lists all Management models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ManagementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Management model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Management model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Management();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Management model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload() && $model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Management model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Management model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Management the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Management::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
