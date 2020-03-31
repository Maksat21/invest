<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\HomeAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use frontend\widgets\ContactsWidget;
use frontend\widgets\HeaderWidget;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="home page-template page-template-page-templates page-template-home-1 page-template-page-templateshome-1-php page page-id-405 wpb-js-composer js-comp-ver-5.4.7 vc_responsive elementor-default elementor-page elementor-page-405">
<?php $this->beginBody() ?>
<div class="preloader">
    <div class="spinner"></div>
</div>
<div class="page-wrapper">
<?=HeaderWidget::widget()?>
    <header class="header header-home-three">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <div class="navbar-header">
                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box  ">
                        <li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children nav-item menu-item-277"><a title="<?= Yii::t('common','Home'); ?>" href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a>
                        </li>
                        <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-540"><a title="<?= Yii::t('common','About Us'); ?>" href="#"><?= Yii::t('common','About Us'); ?></a></li>
                        <li id="menu-item-282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-282 dropdown submenu"><a title="<?= Yii::t('common','Products'); ?>" href="<?= Url::to('/product')?>"><?= Yii::t('common','Products'); ?></a>
                        </li>
                        <li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item nav-item menu-item-379 dropdown submenu active"><a title="<?= Yii::t('common','News'); ?>" href="<?= Url::to('/news')?>"><?= Yii::t('common','News'); ?></a>
                        </li>
                        <li id="menu-item-292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-292 dropdown submenu"><a title="<?= Yii::t('common','Articles'); ?>" href="#"><?= Yii::t('common','Articles'); ?></a>
                            <ul role="menu" class="sub-menu">
                                <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-293"><a title="<?= Yii::t('common','Ecology'); ?>" href="<?= Url::to('/ecology')?>"><?= Yii::t('common','Ecology'); ?></a></li>
                                <li id="menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-553"><a title="<?= Yii::t('common','Personnel Policy'); ?>" href="<?= Url::to('/career-politics')?>"><?= Yii::t('common','Personnel Policy'); ?></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-298 dropdown submenu"><a title="<?= Yii::t('common','Purchase'); ?>" href="<?= Url::to('/purchase')?>"><?= Yii::t('common','Purchase'); ?></a>
                        </li>
                        <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-541"><a title="<?= Yii::t('common','Contact US'); ?>" href="<?= Url::to('/contacts')?>"><?= Yii::t('common','Contact Us'); ?></a></li>
                    </ul>
                </div>
                <div class="right-side-box"> <a href="http://shtheme.com/demosd/industrio1/?page_id=175" class="rqa-btn"><span class="inner"><?= Yii::t('common','Apply '); ?><i class="fa fa-caret-right"></i></span></a></div>
            </div>
        </nav>
    </header>

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
    <?=ContactsWidget::widget()?>
</div>

<footer class="site-footer fixed-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <a href="<?= Url::to('/site')?>"><img src="http://shtheme.net/demosd/industrio/wp-content/uploads/2018/12/logo2-1.png" alt="Awesome Image" /></a>
                        <h3><?= Yii::t('common','About Us'); ?></h3> <b>Миссия Компании</b> - удовлетворение потребностей отечественных и зарубежных золотодобывающих компаний в продукте.</div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3><?= Yii::t('common','Navigation'); ?></h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="<?= Url::to('/site')?>"><?= Yii::t('common','Home'); ?></a></li>
                                <li><a href="<?= Url::to('/about')?>"><?= Yii::t('common','About Us'); ?></a></li>
                                <li><a href="<?= Url::to('/product')?>"><?= Yii::t('common','Products'); ?></a></li>
                                <li><a href="<?= Url::to('/news')?>"><?= Yii::t('common','News'); ?></a></li>
                                <li><a href="<?= Url::to('/purchase')?>"><?= Yii::t('common','Purchase'); ?></a></li>
                                <li><a href="<?= Url::to('/contacts')?>"><?= Yii::t('common','Contact Us'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget services-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3><?= Yii::t('common','Articles & Links'); ?></h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="<?= Url::to('/ecology')?>"><?= Yii::t('common','Ecology'); ?></a></li>
                                <li><a href="<?= Url::to('/career-politics')?>"><?= Yii::t('common','Personnel Policy'); ?></a></li>
                                <li><a href="<?= Url::to('/certificates')?>"><?= Yii::t('common','Certificates'); ?></a></li>
                                <li><a href="<?= Url::to('/gallery')?>"><?= Yii::t('common','Gallery'); ?></a></li>
                                <li><a href="<?= Url::to('/vacancies')?>"><?= Yii::t('common','Vacancies'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget subscribe-widget">
                        <div class="textwidget">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8228.767543196858!2d70.52497526368435!3d43.18203385788403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a7fb5ff295a70d%3A0xa6b77d07f91a656d!2sTOO%20%22Talas%20Investment%20Compony%22!5e0!3m2!1sru!2skz!4v1585548904816!5m2!1sru!2skz" width="370" height="235" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="left-text pull-left">
                <p> © Talas Investment Company 2019. <?= Yii::t('common','All Right Reserved'); ?>.</p>
            </div>
            <div class="right-text pull-right">
                <p> Created by SmartIdeaGroup</p>
            </div>
        </div>
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
