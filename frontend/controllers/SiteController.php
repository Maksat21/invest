<?php
namespace frontend\controllers;

use common\models\Materials;
use Yii;
use frontend\models\forms\ContactForm;
use frontend\models\forms\FeedbackForm;
use common\models\Images;
use common\models\Attachments;

/**
 * Site controller
 */
class SiteController extends BaseController
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['meta_description']]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['meta_keywords']]);

        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $this->layout = '@frontend/views/layouts/home';

        $model = Materials::findOne(['status' => Materials::STATUS_PUBLISHED, 'type'=> Materials::TYPE_ABOUT]);

        return $this->render('about', [
            'model' => $model,
        ]);
    }

    public function actionGallery()
    {
        $this->layout = '@frontend/views/layouts/home';

        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['meta_description']]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['meta_keywords']]);

        $gallery = Images::find()
            ->andWhere(['status' => Images::STATUS_PUBLISHED])
            ->andWhere(['model_type' => Images::TYPE_GALLERY])
            ->all();

        return $this->render('gallery', [
            'gallery' => $gallery,
        ]);

    }

    public function getImage($itemID) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['type' => Attachments::TYPE_GALLERY])
            ->asArray()
            ->all();
        return $image;
    }

}
