<?php

namespace frontend\controllers;

use common\models\Materials;


class EcologyController extends BaseController
{
    public $layout = '@app/views/layouts/home';

    /**
     * Lists all Materials models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Materials::findOne(['status' => Materials::STATUS_PUBLISHED, 'type'=> Materials::TYPE_ECOLOGY]);

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
