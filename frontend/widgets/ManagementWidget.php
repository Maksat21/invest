<?php
/**
 * Created by PhpStorm.
 * User: maks
 * Date: 31.03.20
 * Time: 11:02
 */

namespace frontend\widgets;

use common\models\Management;
use yii\base\Widget;
use common\models\Attachments;

class ManagementWidget extends Widget
{
    public function run()
    {
    $management = Management::find(['status' => Management::STATUS_PUBLISHED])->all();

        return $this->render('management', [
            'management' => $management,
        ]);

    }

    public function getImage($itemID,$isMain=[Attachments::NOT_MAIN, Attachments::MAIN]) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['is_main' => $isMain])
            ->andWhere(['type' => Attachments::TYPE_MANAGEMENT])
            ->asArray()
            ->all();
        return $image;
    }
}