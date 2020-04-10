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
        $this->layout = '@frontend/views/layouts/home';

        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['meta_description']]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['meta_keywords']]);

        $model = Vacancies::find()->orderBy(['id'=> SORT_DESC])->where(['status' => Vacancies::STATUS_PUBLISHED])->all();

        return $this->render('index', [
            'model' => $model
        ]);
    }

}
