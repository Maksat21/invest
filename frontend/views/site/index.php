<?php

/* @var $this yii\web\View */
use frontend\widgets\ManagementWidget;
use frontend\widgets\GalleryWidget;
use frontend\widgets\ProductWidget;
use frontend\widgets\NewsWidget;
use frontend\widgets\ContactsWidget;
use frontend\widgets\SliderWidget;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>


<head>


    <script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyCIW0B_E3g-Yg533xy3yF0WHThi-mFvSNQ&#038;ver=4.9.13'></script>

</head>

    <div class="header-top home-one clearfix">
        <div class="container">
            <div class="logo pull-left">
                <a href="<?= Url::to('/')?>"> <img src="img/talas-invest-logo.png" alt="Talas Investment Company"> </a>
            </div>
            <div class="header-right-info pull-right">
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-phone-call"></i></div>
                    <div class="text-box">
                        <p>Позвоните нам 9:00 - 18:00</p>
                        <h3>+7 (7264) 47 91 22</h3></div>
                </div>
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-clock"></i></div>
                    <div class="text-box">
                        <p>Понедельник и Пятница</p>
                        <h3>9:00 - 18:00</h3></div>
                </div>
                <div class="single-header-right-info">
                    <div class="icon-box"> <i class="industrio-icon-envelope"></i></div>
                    <div class="text-box">
                        <p>Электронная почта</p>
                        <h3>zavod@talasinvest.com</h3></div>
                </div>
            </div>
        </div>
    </div>
    <header class="header header-home-one clearfix">
        <nav class="navbar navbar-default header-navigation stricky clearfix">
            <div class="container clearfix">
                <div class="navbar-header">
                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box  ">
                        <li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children nav-item menu-item-277 dropdown submenu active active"><a title="<?= Yii::t('common','Home'); ?>" href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a>
                        </li>
                        <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-540"><a title==<?= Yii::t('common','About Us'); ?> href="<?= Url::to('/site/about')?>"><?= Yii::t('common','About Us'); ?></a></li>
                        <li id="menu-item-282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-282 dropdown submenu"><a title="<?= Yii::t('common','Products'); ?>" href="<?= Url::to('/product')?>"><?= Yii::t('common','Products'); ?></a>
                        </li>
                        <li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-379 dropdown submenu"><a title="<?= Yii::t('common','News'); ?>" href="<?= Url::to('/news')?>"><?= Yii::t('common','News'); ?></a>
                        </li>
                        <li id="menu-item-292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-292 dropdown submenu"><a title="<?= Yii::t('common','Articles'); ?>" href="#"><?= Yii::t('common','Articles'); ?></a>
                            <ul role="menu" class="sub-menu">
                                <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-293"><a title="<?= Yii::t('common','Ecology'); ?>" href="<?= Url::to('/ecology')?>"><?= Yii::t('common','Ecology'); ?></a></li>
                                <li id="menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-553"><a title="<?= Yii::t('common','Personnel Policy'); ?>" href="<?= Url::to('/career-politics')?>"><?= Yii::t('common','Personnel Policy'); ?></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-298" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-298 dropdown submenu"><a title="<?= Yii::t('common','Purchase'); ?>" href="<?= Url::to('/purchase')?>"><?= Yii::t('common','Purchase'); ?></a>
                        </li>
                        <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-541"><a title="<?= Yii::t('common','Ecology'); ?>" href="<?= Url::to('/contacts')?>"><?= Yii::t('common','Contact Us'); ?></a></li>
                    </ul>
                </div>
                <div class="right-side-box"> <a href="http://shtheme.com/demosd/industrio1/?page_id=175" class="rqa-btn"><span class="inner"><?= Yii::t('common','Apply '); ?><i class="fa fa-caret-right"></i></span></a></div>
            </div>
        </nav>
    </header>
    <main>
        <div data-elementor-type="post" data-elementor-id="405" class="elementor elementor-405" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <?=SliderWidget::widget()?>
                    <section class="elementor-element elementor-section" data-id="fd7ba09" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-ea279eb elementor-column elementor-col-100 elementor-top-column" data-id="ea279eb" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-7d0dded elementor-align-left elementor-widget elementor-widget-bdevs-service" data-id="7d0dded" data-element_type="widget" data-widget_type="bdevs-service.default">
                                                <div class="elementor-widget-container">
                                                    <section class="service-style-one sec-pad pb0">
                                                        <div class="container">
                                                            <div class="service-carousel-one owl-carousel owl-theme">
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="fa fa-industry" aria-hidden="true"></i>
                                                                                <h3>СОБСТВЕННОЕ <br> ПРОИЗВОДСТВО <br>В КАЗАХСТАНЕ</h3>
                                                                                <p></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="industrio-icon-drop-of-liquid"></i>
                                                                                <h3>ОПТИМАЛЬНАЯ <br>ТАРА ДЛЯ <br>ПЕРЕВОЗКИ</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                                                                <h3>ИНДИВИДУАЛЬНАЯ <br>ЦЕНОВАЯ <br>ПОЛИТИКА</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="fa fa-shield" aria-hidden="true"></i>
                                                                                <h3>КОНСУЛЬТАЦИИ <br>ПО ТЕХНИКЕ <br>БЕЗОПАСНОСТИ</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="fa fa-users" aria-hidden="true"></i>
                                                                                <h3>ВЫСОКО- <br>КВАЛИФИЦИРОВАННЫЙ <br>ПЕРСОНАЛ</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="single-service-style-one flip-hover">
                                                                        <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                            <div class="inner"> <i class="fa fa-truck"></i>
                                                                                <h3>ДОСТАВКА <br>ВО ВСЕ РЕГИОНЫ<br> КАЗАХСТАНА</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    <?=ProductWidget::widget()?>
                    <?=GalleryWidget::widget()?>
                    <?=ManagementWidget::widget()?>
                    <?=NewsWidget::widget()?>
                    <?=ContactsWidget::widget()?>
                </div>
            </div>
        </div>
    </main>
