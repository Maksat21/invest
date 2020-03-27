<?php

use yii\helpers\Url;
use common\models\Attachments;
use frontend\controllers\ProductController;
use yii\widgets\LinkPager;

/* @var $product common\models\Product */
$this->title = Yii::t('common', 'Products');

?>




    <div class="inner-banner" style="background: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2018/12/inner-banner-1-1.jpg) center center no-repeat;">
        <div class="container">
            <h3><?= Yii::t('common','Products'); ?></h3>
            <ul class="breadcumb">
                <li><a href="index.html"><?= Yii::t('common','Home'); ?></a></li>
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
                    <div class="prd_list text-center enitre_mouse post-368 product type-product status-publish has-post-thumbnail product_cat-garden-mechinary product_cat-garden-tool product_tag-awards product_tag-industry product_tag-mechanical product_tag-repair first instock shipping-taxable purchasable product-type-simple">
                        <span class="wdt_img shadow_effect effect-apollo mbot25">
                            <?php $itemList = ProductController::getImage($item->id,Attachments::MAIN);
                            if($itemList):?>
                            <a href="index.html@product=mechanical-tool.html">
                                <img src="<?= \common\models\Product::getPath().$itemList[0]['path']?>" alt="" class="img-responsive">
                            </a>
                            <?php else:?>
                                <a href="index.html@product=mechanical-tool.html">
                                <img src="<?= \common\models\Product::getPath().'default.png'?>" alt="" class="img-responsive">
                                </a>
                            <?php endif;?>
                        </span>
                        <div class="prd_title">
                            <?=$item->name?>
                        </div>
                         <span class="prd_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?=$item->content?></span>
                            </span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>

