<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 31.03.20
 * Time: 16:47
 */

/* @var $management common\models\Management */

use frontend\widgets\ManagementWidget;
use common\models\Attachments;
use common\models\Management;
?>
<?php if($management): ?>
<section class="elementor-element elementor-element-64a1bce elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="64a1bce" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-7314bb1 elementor-column elementor-col-100 elementor-top-column" data-id="7314bb1" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-34d2a44 elementor-align-left elementor-widget elementor-widget-bdevs-team" data-id="34d2a44" data-element_type="widget" data-widget_type="bdevs-team.default">
                            <div class="elementor-widget-container">
                                <section class="team-style-two pt0 sec-pad">
                                    <div class="container">
                                        <div class="sec-title text-center">
                                            <h3><span>Руководство</span>компании</h3>
                                        </div>
                                        <div class="team-style-two-carousel owl-carousel owl-theme">
                                            <?php foreach ($management as $item): ?>
                                            <div class="item">
                                                <div class="single-team-style-two">
                                                    <?php $itemList = ManagementWidget::getImage($item->id,Attachments::MAIN);
                                                    if($itemList):?>
                                                        <div class="img-box"> <img src="<?= Management::getPath().$itemList[0]['path']?>?>" alt="Awesome Image" />
                                                    <?php else:?>
                                                        <div class="img-box"> <img src="<?= Management::getPath().'default.png'?>?>" alt="Awesome Image" />
                                                    <?php endif;?>
                                                        <div class="social">
                                                            <div class="inner">
                                                                <a href="#" class="fab fa-facebook-f"></a>
                                                                <a href="#" class="fab fa-twitter"></a>
                                                                <a href="#" class="fab fa-instagram"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-box">
                                                        <h3><?=$item->full_name?></h3>
                                                        <p><?=$item->post?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
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
<?php endif;?>