<?php

namespace backend\controllers;

use Yii;
use common\models\Images;
use backend\models\ImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use vova07\fileapi\actions\UploadAction as FileAPIUpload;
use yii\web\UploadedFile;
use backend\models\forms\ImageForm;
use common\models\Attachments;
use yii\web\Response;
use yii\web\ConflictHttpException;

/**
 * ImagesController implements the CRUD actions for Images model.
 */
class ImagesController extends Controller
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
     * Lists all Images models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Images model.
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
     * Creates a new Images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Images();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Images model.
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
     * Deletes an existing Images model.
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
     * Finds the Images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Images::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDeleteImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $image = new ImageForm();
        $image->scenario = ImageForm::SCENARIO_DELETE_IMAGE;
        if ($image->load(Yii::$app->request->post(), '') && $image->validate()) {
            $attachment = Attachments::findOne($image->image_id);
            if (!empty($attachment) && $attachment->delete()) {
                return ['status' => '200'];
            } else {
                throw new ConflictHttpException('Error responsive server');
            }
        } else {
            throw new NotFoundHttpException('This is page not found');
        }
    }

    public function actionSetMainImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $image = new ImageForm();
        $image->scenario = ImageForm::SCENARIO_SET_MAIN_IMAGE;
        if ($image->load(Yii::$app->request->post(), '') && $image->setMainImage()) {
            return ['status' => '200'];
        } else {
            throw new NotFoundHttpException('This is page not found');
        }
    }
}
