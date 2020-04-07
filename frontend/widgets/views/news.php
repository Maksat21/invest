<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 12:59
 */

/* @var $news common\models\News */
/* @var $item common\models\News[] */

use frontend\widgets\NewsWidget;
use common\models\Attachments;
use common\models\News;
use yii\helpers\Url;
?>


<?php if($news ): ?>

    <section class="elementor-element elementor-section" data-id="cee29c9" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-819b227 elementor-column elementor-col-100 elementor-top-column" data-id="819b227" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-0dd5c08 elementor-align-left elementor-widget elementor-widget-bdevs-blog" data-id="0dd5c08" data-element_type="widget" data-widget_type="bdevs-blog.default">
                                <div class="elementor-widget-container">
                                    <section class="blog-style-one sec-pad pb0">
                                        <div class="container">
                                            <div class="sec-title">
                                                <h3>Последние <span>Новости</span></h3></div>
                                            <div class="row">
                                                <?php foreach ($news as $item): ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="single-blog-style-one">
                                                        <?php $itemList = NewsWidget::getImage($item->id,Attachments::MAIN);
                                                        if($itemList):?>
                                                         <div class="img-box"> <img src="<?= News::getPath().$itemList[0]['path']?>" alt="<?=$item->title?>" /></div>
                                                    <?php else:?>
                                                        <div class="img-box"> <img src="<?= Yii::getAlias('@imgPath').'/default.png'?>" alt="<?=$item->title?>" /></div>
                                                    <?php endif;?>
                                                        <div class="meta-info"> <a href="#"><?= Yii::$app->formatter->asDatetime($item->created_at)?></a>
                                                        </div> <a href="<?= Url::to(['news/view', 'slug' => $item->slug]); ?>"><h3><?=$item->title?></h3></a>
                                                        <p><?=$item->getTeaserHome()?></p> <a href="<?= Url::to(['news/view', 'slug' => $item->slug]); ?>" class="read-more"> <?= Yii::t('common','Learn More'); ?> <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endif;?>
