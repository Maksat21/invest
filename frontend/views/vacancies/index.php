<?php
use yii\helpers\Url;
use common\models\Attachments;
use frontend\controllers\NewsController;
use yii\widgets\LinkPager;

/* @var $model common\models\Vacancies */
/* @var $item common\models\Vacancies[] */

$this->title = Yii::t('common', 'Vacancies');

?>


<div class="inner-banner">
    <div class="container">
        <h3><?= Yii::t('common','Vacancies'); ?></h3>
        <ul class="breadcumb">
            <li><a href=""><?= Yii::t('common','Home'); ?></a></li>
                <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                <li><span><?= Yii::t('common','Vacancies'); ?></span></li>
        </ul>
    </div>
</div>
<?php if ($model):?>
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php foreach ($model as $item): ?>
                <div class="project-details-content">
                    <h3><?= $item->title?></h3>
                    <br />
                    <p><?=$item->description?></p>
                    <ul class="meta-info">
                        <li><i class="fa fa-tag"></i><span><?= Yii::t('common','Wage'); ?></span><?=$item->wage?></li>
                    </ul>
                </div>
    <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php else:?>
    <section class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="project-details-content">
                            <h1><?= Yii::t('common','Not Vacancies'); ?></h1>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>