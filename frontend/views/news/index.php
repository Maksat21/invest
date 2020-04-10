<?php

use yii\helpers\Url;
use common\models\Attachments;
use frontend\controllers\NewsController;
use yii\widgets\LinkPager;

/* @var $news common\models\News */
/* @var $item common\models\News[] */

$this->title = Yii::t('common', 'News');

?>


<div class="inner-banner" style="background: url(<?=Yii::getAlias('@imgPath');?>/t-1.png) repeat fixed 0 0px, rgba(0, 0, 0, 0) url(<?=Yii::getAlias('@imgPath');?>/bg.jpg) no-repeat fixed 0 0 / 100% auto;">
            <div class="container">
                <h3><?= Yii::t('common','News'); ?></h3>
                <ul class="breadcumb">
                    <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
                    <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                    <li><span><?= Yii::t('common','News'); ?></span></li>
                </ul>
            </div>
        </div>

        <section class="blog-listing-page sec-pad">
            <div class="container">
                <div class="row">
                    <?php if ($news):?>
                        <?php foreach ($news as $item): ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-blog-style-two">
                            <?php $itemList = NewsController::getImage($item->id,Attachments::MAIN);
                            if($itemList):?>
                                <div class="img-box" style="background-image: url('<?= \common\models\News::getPath().$itemList[0]['path']?>');height: 350px;background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;"></div>
                            <?php else:?>
                                <div class="img-box" style="background-image: url('<?= Yii::getAlias('@imgPath').'/default.png'?>');height: 350px;background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;"></div>
                            <?php endif;?>
                            <div class="text-box"> <a href="<?= Url::to(['news/view', 'slug' => $item->slug]); ?>"><h3><?=$item->title?></h3></a>
                                <div class="meta-info"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDatetime($item->created_at)?> </div>
                                <p> <?=$item->getTeaser()?></p> <a href="<?= Url::to(['news/view', 'slug' => $item->slug]); ?>" class="more hvr-sweep-to-right"><?= Yii::t('common','Learn More'); ?></a></div>
                        </div>
                    </div>
                        <?php endforeach; ?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-post-pagination">
                            <div class="tt-pagination">
                                <label>
                                    <?php if ($count): ?>
                                        <?= Yii::t('common','Page'); ?>:
                                    <?php endif; ?>
                                </label>
                                <?php
                                echo LinkPager::widget([
                                    'pagination' => $pages,
                                    'hideOnSinglePage' => true,
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>


