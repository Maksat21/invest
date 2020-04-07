<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use yii\data\Pagination;
use common\models\Attachments;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends BaseController
{
    public $layout = '@app/views/layouts/home';

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['meta_description']]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['meta_keywords']]);

        $query = Product::find()->orderBy(['id'=> SORT_DESC])->where(['status' => Product::STATUS_PUBLISHED]);
        $count = $query->count();
        $pages = new Pagination(['totalCount' => $count, 'defaultPageSize' => Yii::$app->params['ProductPaginationLimit']]);
        $product = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        if ($count > Yii::$app->params['ProductPaginationLimit'])
        {
            $count = true;
        }
        else
        {
            $count = false;
        }

        return $this->render('index', [
            'pages' => $pages,
            'product' => $product,
            'count' => $count,
        ]);
    }

    public function getImage($itemID,$isMain=[Attachments::NOT_MAIN, Attachments::MAIN]) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['is_main' => $isMain])
            ->andWhere(['type' => Attachments::TYPE_PRODUCT])
            ->asArray()
            ->all();
        return $image;
    }
}
