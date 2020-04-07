<?php

namespace frontend\controllers;

use Yii;
use common\models\Contacts;

/**
 * ContactsController implements the CRUD actions for Contacts model.
 */
class ContactsController extends BaseController
{
    public $layout = '@app/views/layouts/home';
    /**
     * Lists all Contacts models.
     * @return mixed
     */
    public function actionIndex()
    {
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['meta_description']]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['meta_keywords']]);

        $model = Contacts::findOne(['status' => Contacts::STATUS_PUBLISHED]);

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
