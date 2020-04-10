<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 10.04.20
 * Time: 10:22
 */

/* @var $gallery common\models\Images */

use frontend\controllers\SiteController;
use common\models\Images;
use yii\helpers\Url;

?>
<?php if($gallery): ?>

    <div class="elementor-widget-container">
        <div class="inner-banner" style="background: url(<?=Yii::getAlias('@imgPath');?>/t-1.png) repeat fixed 0 0px, rgba(0, 0, 0, 0) url(<?=Yii::getAlias('@imgPath');?>/bg.jpg) no-repeat fixed 0 0 / 100% auto;">
            <div class="container">
                <h3><?= Yii::t('common','Gallery'); ?></h3>
                <ul class="breadcumb">
                    <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
                    <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                    <li><span><?= Yii::t('common','Gallery'); ?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="portfolio-style-two gallery sec-pad">
        <div class="container">
            <div class="gallery-filter">
                <ul class="post-filter masonary text-center">
                    <li class="filter active" data-filter=".masonary-item"><span><i class="industrio-icon-layers"></i><?= Yii::t('common','All Images'); ?></span></li>
                    <?php foreach ($gallery as $item): ?>
                        <li class="filter " data-filter=".<?=$item->id?>"><span><i class="industrio-icon-drop-of-liquid"></i><?=$item->name?></span></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="row masonary-layout filter-layout" data-filter-class="filter">
                <?php foreach ($gallery as $item2): ?>
                    <?php $itemList = SiteController::getImage($item2->id); ?>
                    <?php foreach ($itemList as $images):?>
                        <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item <?=$item2->id?>">
                            <div class="single-portfolio-style-two">
                                <div class="img-box">
                                    <img src="<?= Images::getPath().$images['path']?>" alt="<?=$item2->name?>" />
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="<?= Images::getPath().$images['path']?>" class="img-popup"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endforeach;?>
            </div>
        </div>
    </section>


<?php endif;?>