<?php

namespace frontend\controllers;


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
        $model = Contacts::findOne(['status' => Contacts::STATUS_PUBLISHED]);

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
