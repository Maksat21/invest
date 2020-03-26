<?php

namespace frontend\controllers;

use Yii;
use common\models\Vacancies;
use frontend\models\VacanciesSearch;
use yii\web\NotFoundHttpException;

/**
 * VacanciesController implements the CRUD actions for Vacancies model.
 */
class VacanciesController extends BaseController
{

    /**
     * Lists all Vacancies models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VacanciesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vacancies model.
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
     * Finds the Vacancies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vacancies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vacancies::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
