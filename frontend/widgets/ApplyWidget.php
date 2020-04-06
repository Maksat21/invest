<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 02.04.20
 * Time: 12:16
 */

namespace frontend\widgets;

use Yii;
use frontend\models\forms\FeedbackForm;
use yii\base\Widget;

class ApplyWidget extends Widget
{

    public function run()
    {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('common', 'Thank you for contacting us.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('common', 'An error occurred while sending the message.'));
            }

        } else {
            return $this->render('apply', [
                'model' => $model,
            ]);
        }
    }


}