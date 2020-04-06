<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 12:58
 */

namespace frontend\widgets;


use common\models\News;
use common\models\Attachments;
use yii\base\Widget;

class NewsWidget extends Widget
{
    public function run()
    {
        $news = News::find(['status' => News::STATUS_PUBLISHED])->all();

        return $this->render('news', [
            'news' => $news,
        ]);

    }

    public function getImage($itemID,$isMain=[Attachments::NOT_MAIN, Attachments::MAIN]) {
        $image = Attachments::find()
            ->andWhere(['model_id' => $itemID])
            ->andWhere(['is_main' => $isMain])
            ->andWhere(['type' => Attachments::TYPE_NEWS])
            ->asArray()
            ->all();
        return $image;
    }

}