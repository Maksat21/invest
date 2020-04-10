<?php

use yii\helpers\Url;
use common\models\Attachments;
use frontend\controllers\ProductController;
use yii\widgets\LinkPager;

/* @var $product common\models\Product */
$this->title = Yii::t('common', 'Products');
$this->registerMetaTag(['name' => 'title', 'content' => Yii::t('common', 'Products')]);
$this->registerMetaTag(['name' => 'description', 'content' => $product[1]['meta_description']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $product[1]['meta_keywords']]);
?>

<div class="inner-banner" style="background: url(<?=Yii::getAlias('@imgPath');?>/t-1.png) repeat fixed 0 0px, rgba(0, 0, 0, 0) url(<?=Yii::getAlias('@imgPath');?>/bg.jpg) no-repeat fixed 0 0 / 100% auto;">
        <div class="container">
            <h3><?= Yii::t('common','Products'); ?></h3>
            <ul class="breadcumb">
                <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
                <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                <li><span><?= Yii::t('common','Products'); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="full_width padtb_100_20 woocommerce shop">
        <div class="container">
            <div class="row">
                <?php if ($product):?>
                    <div class="col-md-12">
                        <?php foreach ($product as $item): ?>
                        <article class="product-modern text-center text-sm-left">
                            <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                <div class="unit-left"><a class="product-modern-figure">
                                        <?php $itemList = ProductController::getImage($item->id,Attachments::MAIN);
                                        if($itemList):?>
                                        <img src="<?= \common\models\Product::getPath().$itemList[0]['path']?>" alt="<?=$item->name?>" width="328" height="330"/></a>
                                        <?php else:?>
                                            <img src="<?= Yii::getAlias('@imgPath').'/default.png'?>" alt="<?=$item->name?>" width="328" height="330"/></a>
                                        <?php endif;?>
                                </div>
                                <div class="unit-body">
                                    <div class="product-modern-body">
                                        <h4 class="product-modern-title"><?=$item->name?></h4>
                                        <p class="product-modern-text"><?=$item->content?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>

