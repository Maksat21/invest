<?php

/* @var $model common\models\Materials */
use yii\helpers\Url;

$this->registerMetaTag(['name' => 'title', 'content' => $model['meta_title']]);
$this->registerMetaTag(['name' => 'description', 'content' => $model['meta_description']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $model['meta_keywords']]);
$this->title = $model['title'];
?>


    <div class="inner-banner" style="background: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2018/12/inner-banner-1-1.jpg) center center no-repeat;">
        <div class="container">
            <h3><?= Yii::t('common','Ecology'); ?></h3>
            <ul class="breadcumb">
                <li><a href="<?= Url::to('/')?>"> <?= Yii::t('common','Home'); ?> </a></li>
                <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                <li><span><?= Yii::t('common','Ecology'); ?></span></li>
            </ul>
        </div>
    </div>
    <?php if($model): ?>
    <section class="blog-listing-page blog-details-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-blog-style-two">
                        <div class="text-box"><h3><?=$model->title?></h3>
                            <div class="meta-info"><i class="fa fa-calendar"></i>  <?= Yii::$app->formatter->asDatetime($model->created_at)?></div>
                            <?=$model->description?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>

