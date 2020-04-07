<?php

/* @var $model common\models\Contacts */
use yii\helpers\Url;

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
                                                            <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
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
                                                                            <a href="<?=$model->fax_number?>"><?=$model->fax_number?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endif;?>
                                                            </div>
                                                            <div class="col-md-6 table-contact">
                                                                <table cellspacing="0">
                                                                    <tr>
                                                                        <th>Отдел</th>
                                                                        <th>Внутренний номер</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Приемная</td>
                                                                        <td>102</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Бухгалтерия</td>
                                                                        <td>163</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Финансово-экономический отдел</td>
                                                                        <td>199</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Юридический отдел</td>
                                                                        <td>136</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Отдел кадров</td>
                                                                        <td>150</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Отдел энергетики</td>
                                                                        <td>141</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ІТ - отдел</td>
                                                                        <td>184</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Отдел материально-технического снабжения и сбыта</td>
                                                                        <td>168</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Производственно-технический отдел</td>
                                                                        <td>148</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Отдел по технике безопасности</td>
                                                                        <td>139</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ремонтно-механическая служба</td>
                                                                        <td>142</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Транспортный цех</td>
                                                                        <td>151</td>
                                                                    </tr>
                                                                </table>
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

