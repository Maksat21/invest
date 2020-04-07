<?php
/**
 * Created by PhpStorm.
 * User: maks
 * Date: 31.03.20
 * Time: 10:45
 */

namespace frontend\widgets;
use common\models\Contacts;
use yii\base\Widget;

class HeaderWidget extends Widget
{
    public function run()
    {
    $header = Contacts::findOne(['status' => Contacts::STATUS_PUBLISHED]);

        return $this->render('header', [
            'header' => $header,
        ]);

    }

}