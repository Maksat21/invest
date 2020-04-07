<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 01.04.20
 * Time: 18:14
 */

namespace frontend\widgets;

use common\models\Images;
use common\models\Attachments;
use yii\base\Widget;

class GalleryWidget extends Widget
{
    public function run()
    {
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