<?php

/* @var $model common\models\Contacts */


$this->title = Yii::t('common', 'Contacts');
?>

    <div data-elementor-type="post" data-elementor-id="524" class="elementor elementor-524" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-element elementor-element-89e3b39 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="89e3b39" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-fde1ca6 elementor-column elementor-col-100 elementor-top-column" data-id="fde1ca6" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-9a28fdd elementor-align-left elementor-widget elementor-widget-bdevs-banner" data-id="9a28fdd" data-element_type="widget" data-widget_type="bdevs-banner.default">
                                            <div class="elementor-widget-container">
                                                <div class="inner-banner" style="background: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2018/12/inner-banner-1-1.jpg) center center no-repeat;">
                                                    <div class="container">
                                                        <h3><?= Yii::t('common','Contact Us'); ?></h3>
                                                        <ul class="breadcumb">
                                                            <li><a href="#"><?= Yii::t('common','Home'); ?></a></li>
                                                            <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
                                                            <li><span><?= Yii::t('common','Contact Us'); ?></span></li>
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
                <section class="elementor-element elementor-element-8ea323a elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="8ea323a" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-30374f3 elementor-column elementor-col-100 elementor-top-column" data-id="30374f3" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-74a7f79 elementor-align-left elementor-widget elementor-widget-bdevs-contact" data-id="74a7f79" data-element_type="widget" data-widget_type="bdevs-contact.default">
                                            <div class="elementor-widget-container">
                                                <section class="contact-page sec-pad">
                                                    <div class="container">
                                                        <div class="sec-title text-center">
                                                            <h3>Cвязаться <span>с нами</span></h3>
                                                            <p>Мы, за внедрение прогрессивных технологий, способствующих улучшению продукта и
                                                                <br /> экологической безопасности производства.</p>
                                                        </div>
                                                        <div class="map">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8228.767543196858!2d70.52497526368435!3d43.18203385788403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a7fb5ff295a70d%3A0xa6b77d07f91a656d!2sTOO%20%22Talas%20Investment%20Compony%22!5e0!3m2!1sru!2skz!4v1585548904816!5m2!1sru!2skz" width="570" height="495" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <?php if($model): ?>
                                                                <div class="contact-form-address">
                                                                    <div class="contact-form">
                                                                        <p><?= Yii::t('common','Contacts'); ?></p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <i class="fa fa-address-card-o"></i>
                                                                            <strong><?= Yii::t('common','Address'); ?></strong><br>
                                                                            <p><?=$model->address?></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <i class="fa fa-calendar"></i>
                                                                            <strong><?= Yii::t('common','Schedule'); ?></strong><br>
                                                                            <p><?=$model->work_day?></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <i class="fa fa-envelope"></i>
                                                                            <strong><?= Yii::t('common','Email'); ?></strong><br>
                                                                            <a href="mailto:<?=$model->email?>"><?=$model->email?></a>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <i class="fa fa-phone"></i>
                                                                            <strong><?= Yii::t('common','Telephone'); ?></strong><br>
                                                                            <a href="callto:<?=$model->phone?>"><?=$model->phone?></a>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <i class="fa fa-fax"></i>
                                                                            <strong><?= Yii::t('common','Fax'); ?></strong><br>
                                                                            <a href="callto:800-2345-6789">+7 (7264) 45 02 59</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endif;?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div role="form" class="wpcf7" id="wpcf7-f180-p524-o1" lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response"></div>
                                                                    <form action="" method="post" class="wpcf7-form rqa-form contact-form" novalidate="novalidate">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7" value="180" />
                                                                            <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f180-p524-o1" />
                                                                            <input type="hidden" name="_wpcf7_container_post" value="524" />
                                                                        </div>
                                                                        <div class="contact-form">
                                                                            <h3>Send Mail</h3>
                                                                            <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name.." /></span><span class="wpcf7-form-control-wrap email"><input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your email address.." /></span><span class="wpcf7-form-control-wrap subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Location.." /></span><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Write..."></textarea></span>
                                                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit hvr-sweep-to-right" />
                                                                            </p>
                                                                        </div>
                                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                    </form>
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
            </div>
        </div>
    </div>