<?php

/* @var $this yii\web\View */
use frontend\widgets\ManagementWidget;
use frontend\widgets\GalleryWidget;
use frontend\widgets\ProductWidget;
use yii\helpers\Url;

$this->title = Yii::$app->name;
?>


<head>


    <script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyCIW0B_E3g-Yg533xy3yF0WHThi-mFvSNQ&#038;ver=4.9.13'></script>

</head>

<div class="preloader">
    <div class="spinner"></div>
</div>

    <div class="header-top home-one clearfix">
        <div class="container">
            <div class="logo pull-left">
                <a href="index.html"> <img src="img/talas-invest-logo.png" alt="Awesome Image"> </a>
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
                        <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-540"><a title==<?= Yii::t('common','About Us'); ?> href="<?= Url::to('/about')?>"><?= Yii::t('common','About Us'); ?></a></li>
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
                    <section class="elementor-element elementor-element-c788b26 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c788b26" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-7087790 elementor-column elementor-col-100 elementor-top-column" data-id="7087790" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-bd24821 elementor-align-left elementor-widget elementor-widget-bdevs-slider" data-id="bd24821" data-element_type="widget" data-widget_type="bdevs-slider.default">
                                                <div class="elementor-widget-container">
                                                    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one slider-home-three" data-ride="carousel">
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active slide-1" style="background-image: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2019/01/banner-3-2.png);background-position: center center;">
                                                                <div class="carousel-caption">
                                                                    <div class="container">
                                                                        <div class="box valign-middle">
                                                                            <div class="content text-center">
                                                                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2> <a href="index.html@page_id=458.html#" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item slide-2" style="background-image: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2019/01/banner-3-1.png);background-position: center center;">
                                                                <div class="carousel-caption">
                                                                    <div class="container">
                                                                        <div class="box valign-middle">
                                                                            <div class="content text-center">
                                                                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2>
                                                                                <p data-animation="animated fadeInDown">We are the best guarenteed company to serve you. We are dedicated to help you any time.</p> <a href="index.html@page_id=458.html#" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item slide-3" style="background-image: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2019/01/banner-3-3.png);background-position: center center;">
                                                                <div class="carousel-caption">
                                                                    <div class="container">
                                                                        <div class="box valign-middle">
                                                                            <div class="content text-right">
                                                                                <h2 data-animation="animated fadeInUp">We will provide the best <span>Industrial</span> service</h2>
                                                                                <p data-animation="animated fadeInDown">We are the best guarenteed company to serve you. We are dedicated to help you any time.</p> <a href="index.html@page_id=458.html#" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="left carousel-control" href="index.html@page_id=458.html#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i class="fas fa-angle-left"></i> <span class="sr-only">Previous</span> </a>
                                                        <a class="right carousel-control" href="index.html@page_id=458.html#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fas fa-angle-right"></i> <span class="sr-only">Next</span> </a>
                                                        <ul class="carousel-indicators list-inline custom-navigation">
                                                            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
                                                            <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
                                                            <li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                                                <h3>Latest <span>Blog</span></h3></div>
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="single-blog-style-one">
                                                                        <div class="img-box"> <img src="wp-content/uploads/2018/12/blog-1-1.jpg" alt="Awesome Image" /></div>
                                                                        <div class="meta-info"> <a href="index.html#">February 24, 2018</a> <a href="index.html@cat=7.html" title="business" class="letter-spacing-033 small-text highlight category">business </a>,<a href="index.html@cat=9.html" title="technology" class="letter-spacing-033 small-text highlight category">technology </a></div> <a href="index.html@p=9.html"><h3>Loft Office With Vintage Decor For Working</h3></a>
                                                                        <p> It’s no secret that the digital industry is booming. From exciting startups to global brands, colo mpanies are reaching out to digital agencie, responding to the new possibilitie available....</p> <a href="index.html@p=9.html" class="read-more"> Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="single-blog-style-one">
                                                                        <div class="img-box"> <img src="wp-content/uploads/2018/05/blog-1-2-1.jpg" alt="Awesome Image" /></div>
                                                                        <div class="meta-info"> <a href="index.html#">May 24, 2018</a> <a href="index.html@cat=7.html" title="business" class="letter-spacing-033 small-text highlight category">business </a>,<a href="index.html@cat=8.html" title="consulting" class="letter-spacing-033 small-text highlight category">consulting </a>,<a href="index.html@cat=6.html" title="fashion" class="letter-spacing-033 small-text highlight category">fashion </a></div> <a href="index.html@p=14.html"><h3>Australia’s provider of industry-based research</h3></a>
                                                                        <p> It’s no secret that the digital industry is booming. From exciting startups to global brands, colo mpanies are reaching out to digital agencie, responding to the new possibilitie available....</p> <a href="index.html@p=14.html" class="read-more"> Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="single-blog-style-one">
                                                                        <div class="img-box"> <img src="wp-content/uploads/2018/12/blog-1-1.jpg" alt="Awesome Image" /></div>
                                                                        <div class="meta-info"> <a href="index.html#">January 24, 2018</a> <a href="index.html@cat=6.html" title="fashion" class="letter-spacing-033 small-text highlight category">fashion </a>,<a href="index.html@cat=9.html" title="technology" class="letter-spacing-033 small-text highlight category">technology </a></div> <a href="index.html@p=17.html"><h3>U.S. fund managers trim bank stocks on profit worries</h3></a>
                                                                        <p> It’s no secret that the digital industry is booming. From exciting startups to global brands, colo mpanies are reaching out to digital agencie, responding to the new possibilitie available....</p> <a href="index.html@p=17.html" class="read-more"> Read More <i class="fa fa-angle-double-right"></i></a></div>
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

                    <section class="elementor-element elementor-section" data-id="de1863e" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-413be5d elementor-column elementor-col-100 elementor-top-column" data-id="413be5d" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-96b06e1 elementor-align-left elementor-widget elementor-widget-bdevs-award" data-id="96b06e1" data-element_type="widget" data-widget_type="bdevs-award.default">
                                                <div class="elementor-widget-container">
                                                    <section class="award-winning">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="title">
                                                                        <h3>Winning <span>awards</span></h3>
                                                                        <p>You will find yourself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="img-box clearfix"> <img src="wp-content/uploads/2019/01/certificate-1-1.jpg" alt="Awesome Image" class="pull-left" /> <img src="wp-content/uploads/2019/01/certificate-1-2.jpg" alt="Awesome Image" class="pull-right" /></div>
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
                </div>
            </div>
        </div>
    </main>
