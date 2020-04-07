<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 14:28
 */

namespace frontend\widgets;


use common\models\Slider;
use yii\base\Widget;

class SliderWidget extends Widget
{
    public function run()
    {
        $slider = Slider::find(['status' => Slider::STATUS_PUBLISHED])->all();

        return $this->render('slider', [
            'slider' => $slider,
        ]);

    }
}