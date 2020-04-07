<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 01.04.20
 * Time: 17:03
 */

namespace frontend\widgets;

use common\models\Images;
use common\models\Attachments;
use yii\base\Widget;

class CertificatesWidget extends Widget
{
    public function run()
    {
        $certificates = Images::findOne(['status' => Images::STATUS_PUBLISHED, 'model_type' => Images::TYPE_CERTIFICATE]);

        return $this->render('certificates', [
            'certificates' => $certificates,
        ]);

    }

    public function getImage($itemID) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['type' => Attachments::TYPE_CERTIFICATE])
            ->asArray()
            ->all();
        return $image;
    }
}