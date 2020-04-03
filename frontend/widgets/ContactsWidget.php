<?php
/**
 * Created by PhpStorm.
 * User: maks
 * Date: 19.03.20
 * Time: 13:02
 */

namespace frontend\widgets;
use common\models\Contacts;
use yii\base\Widget;

class ContactsWidget extends Widget
{
    public function run()
    {
    $contact = Contacts::findOne(['status' => Contacts::STATUS_PUBLISHED]);

        return $this->render('contacts', [
            'contact' => $contact,
        ]);

    }

}