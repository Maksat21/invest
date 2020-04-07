<?php

/* @var $this yii\web\View */
/* @var $model common\models\Materials */

use yii\helpers\Url;
use frontend\widgets\ManagementWidget;
use frontend\widgets\CertificatesWidget;

$this->title = Yii::t('common','About Us');
?>


        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-element elementor-element-0fa301d elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0fa301d" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-d8e4ecf elementor-column elementor-col-100 elementor-top-column" data-id="d8e4ecf" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-86388ea elementor-align-left elementor-widget elementor-widget-bdevs-banner" data-id="86388ea" data-element_type="widget" data-widget_type="bdevs-banner.default">
                                            <div class="elementor-widget-container">
                                                <div class="inner-banner" style="background: url(<?=Yii::getAlias('@imgPath');?>/t-1.png) repeat fixed 0 0px, rgba(0, 0, 0, 0) url(<?=Yii::getAlias('@imgPath');?>/bg.jpg) no-repeat fixed 0 0 / 100% auto;">
                                                    <div class="container">
                                                        <h3><?= Yii::t('common','About Us'); ?></h3>
                                                        <ul class="breadcumb">
                                                            <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
                                                            <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                                                            <li><span><?= Yii::t('common','About Us'); ?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-element elementor-element-b7763c7 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b7763c7" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-8a97db1 elementor-column elementor-col-100 elementor-top-column" data-id="8a97db1" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-fe36718 elementor-align-left elementor-widget elementor-widget-bdevs-about" data-id="fe36718" data-element_type="widget" data-widget_type="bdevs-about.default">
                                            <div class="elementor-widget-container">
                                                <section class="about-style-three">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <?php if($model): ?>
                                                                <div class="about-content">
                                                                    <h3><?=$model->title?></h3>
                                                                    <p><?=$model->description?></p>
                                                                </div>
                                                                <?php endif;?>
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
                <?=CertificatesWidget::widget()?>
                <section class="elementor-element elementor-element-e732938 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e732938" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-952e7f6 elementor-column elementor-col-100 elementor-top-column" data-id="952e7f6" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-8eb6f5f elementor-align-left elementor-widget elementor-widget-bdevs-features" data-id="8eb6f5f" data-element_type="widget" data-widget_type="bdevs-features.default">
                                            <div class="elementor-widget-container">
                                                <section class="features-style-two">
                                                    <div class="container">
                                                        <div class="text-center">
                                                            <h2>Наши преимущества</h2>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="fa fa-industry" aria-hidden="true"></i>
                                                                        <h3>СОБСТВЕННОЕ <br> ПРОИЗВОДСТВО <br>В КАЗАХСТАНЕ</h3>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="industrio-icon-drop-of-liquid"></i>
                                                                        <h3>ОПТИМАЛЬНАЯ <br>ТАРА ДЛЯ <br>ПЕРЕВОЗКИ</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                                                        <h3>ИНДИВИДУАЛЬНАЯ <br>ЦЕНОВАЯ <br>ПОЛИТИКА</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="fa fa-shield" aria-hidden="true"></i>
                                                                        <h3>КОНСУЛЬТАЦИИ <br>ПО ТЕХНИКЕ <br>БЕЗОПАСНОСТИ</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="fa fa-users" aria-hidden="true"></i>
                                                                        <h3>ВЫСОКО- <br>КВАЛИФИЦИРОВАННЫЙ <br>ПЕРСОНАЛ</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                <div class="single-features-style-two hvr-bounce-to-bottom">
                                                                    <div class="inner"> <i class="fa fa-truck"></i>
                                                                        <h3>ДОСТАВКА <br>ВО ВСЕ РЕГИОНЫ<br> КАЗАХСТАНА</h3>
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
                <?=ManagementWidget::widget()?>
            </div>
        </div>
    </div>



