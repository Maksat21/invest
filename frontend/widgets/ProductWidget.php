<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 12:23
 */

namespace frontend\widgets;


use common\models\Product;
use common\models\Attachments;
use yii\base\Widget;

class ProductWidget extends Widget
{

    public function run()
    {
        $product = Product::find(['status' => Product::STATUS_PUBLISHED])->all();

        return $this->render('product', [
            'product' => $product,
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