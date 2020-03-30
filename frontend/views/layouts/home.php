<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\HomeAsset;
use common\widgets\Alert;
use yii\helpers\Url;

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
    <div class="header-top home-three">
        <div class="container">
            <div class="logo pull-left">
                <a href="index.html"> <img src="img/talas-invest-logo.png" alt="Awesome Image"> </a>
            </div>
            <div class="header-right-info pull-right">
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-phone-call"></i></div>
                    <div class="text-box">
                        <p>Call us 9:00am - 6:00pm</p>
                        <h3>222-121-4562</h3></div>
                </div>
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-clock"></i></div>
                    <div class="text-box">
                        <p>Monday to Friday</p>
                        <h3>9:00am - 6:00pm</h3></div>
                </div>
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-envelope"></i></div>
                    <div class="text-box">
                        <p>E-mail us</p>
                        <h3>support@gmail.com</h3></div>
                </div>
            </div>
        </div>
    </div>
    <header class="header header-home-three">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <div class="navbar-header">
                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box  ">
                        <li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children nav-item menu-item-277"><a title="<?= Yii::t('common','Home'); ?>" href="#"><?= Yii::t('common','Home'); ?></a>
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
                        <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-541"><a title="<?= Yii::t('common','Contact US'); ?>" href="#"><?= Yii::t('common','Contact Us'); ?></a></li>
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
    <section class="contact-info-style-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h3>Get in <span>Touch</span></h3>
                        <p>You will find yourself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-infos">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <i class="industrio-icon-phone-call"></i></div>
                            <div class="text-box">
                                <h3>Call us on</h3>
                                <p>222-121-4562</p>
                            </div>
                        </div>
                        <div class="single-contact-infos">
                            <div class="icon-box"> <i class="industrio-icon-envelope"></i></div>
                            <div class="text-box">
                                <h3>Email us</h3>
                                <p>support@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<footer class="site-footer fixed-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <a href="http://shtheme.net/demosd/industrio/"><img src="http://shtheme.net/demosd/industrio/wp-content/uploads/2018/12/logo2-1.png" alt="Awesome Image" /></a>
                        <h3>About us</h3> Many of our SELC registered employees are requested as main preferred temporary staff when a service.</div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3>Links</h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=157">About Us</a></li>
                                <li><a href="index.html@page_id=229.html">Services</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=243">Project</a></li>
                                <li><a href="index.html#">Pages</a></li>
                                <li><a href="index.html@page_id=24.html">Blog</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=175">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget services-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3>Services</h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="index.html#">Engineering</a></li>
                                <li><a href="index.html#">Petrolium &amp; Gas</a></li>
                                <li><a href="index.html#">Power &amp; Engergy</a></li>
                                <li><a href="index.html#">Mechanical Engineering</a></li>
                                <li><a href="index.html#">Agricultural Processing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget subscribe-widget">
                        <div class="textwidget">
                            <h3>Subscribe Today</h3>
                            <p>Many of our SELC registered employees are requested as main</p>
                            <div role="form" class="wpcf7" id="wpcf7-f239-o2" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="index.html#wpcf7-f239-o2" method="post" class="wpcf7-form rqa-form contact-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="239" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f239-o2" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    </div>
                                    <div class="subscribe-form"> <span class="wpcf7-form-control-wrap email"><input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email Address" /></span>
                                        <br />
                                        <input type="submit" value="Subscribe" class="wpcf7-form-control wpcf7-submit hvr-sweep-to-right" />
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="left-text pull-left">
                <p> © Copyright Industrio 2019. All right reserved.</p>
            </div>
            <div class="right-text pull-right">
                <p> Created by Shtheme</p>
            </div>
        </div>
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
