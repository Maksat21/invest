<?php

use yii\helpers\Url;
use common\models\Attachments;
use frontend\controllers\NewsController;
use yii\widgets\LinkPager;

/* @var $news common\models\News */
$this->title = Yii::t('common', 'News');

?>


        <div class="inner-banner" style="background: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2018/12/inner-banner-1-1.jpg) center center no-repeat;">
            <div class="container">
                <h3><?= Yii::t('common','News'); ?></h3>
                <ul class="breadcumb">
                    <li><a href="index.html"><?= Yii::t('common','Home'); ?></a></li>
                    <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                    <li><span><?= Yii::t('common','News'); ?></span></li>
                </ul>
            </div>
        </div>

        <section class="blog-listing-page sec-pad">
            <div class="container">
                <div class="row">
                    <?php if ($news):?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php foreach ($news as $item): ?>
                        <div class="single-blog-style-two">
                            <?php $itemList = NewsController::getImage($item->id,Attachments::MAIN);
                            if($itemList):?>
                                <div class="img-box"> <img src="<?= \common\models\News::getPath().$itemList[0]['path']?>" alt="Awesome Image"></div>
                            <?php else:?>
                                <div class="img-box"> <img src="<?= \common\models\News::getPath().'default.png'?>" alt="Awesome Image"></div>
                            <?php endif;?>
                            <div class="text-box"> <a href="<?=Url::to(['news/view', 'id' => $item->id]) ?>"><h3><?=$item->title?></h3></a>
                                <div class="meta-info"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDatetime($item->created_at)?> </div>
                                <p> <?=$item->getTeaser()?></p> <a href="<?=Url::to(['news/view', 'id' => $item->id]) ?>" class="more hvr-sweep-to-right"><?= Yii::t('common','Learn More'); ?></a></div>
                        </div>
                        <?php endforeach; ?>
<!--                        <div class="blog-post-pagination">-->
<!--                            <ul class="pagination">-->
<!--                                <li><span aria-current='page' class='page-numbers current'>1</span></li>-->
<!--                                <li><a class='page-numbers' href='index.html@page_id=24&amp;paged=2.html'>2</a></li>-->
<!--                                <li><a class="next page-numbers" href="index.html@page_id=24&amp;paged=2.html"><i class = "fa fa-angle-right"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
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

