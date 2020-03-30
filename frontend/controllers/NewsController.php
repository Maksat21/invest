<?php

namespace frontend\controllers;

use Yii;
use common\models\News;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use common\models\Attachments;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends BaseController
{
    public $layout = '@app/views/layouts/home';

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = News::find()->orderBy(['id'=> SORT_DESC])->where(['status' => News::STATUS_PUBLISHED]);
        $count = $query->count();
        $pages = new Pagination(['totalCount' => $count, 'defaultPageSize' => Yii::$app->params['NewsPaginationLimit']]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        if ($count > Yii::$app->params['NewsPaginationLimit'])
        {
            $count = true;
        }
        else
        {
            $count = false;
        }

        return $this->render('index', [
            'pages' => $pages,
            'news' => $news,
            'count' => $count,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function getImage($itemID,$isMain=[Attachments::NOT_MAIN, Attachments::MAIN]) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['is_main' => $isMain])
            ->asArray()
            ->all();
        return $image;
    }
}
