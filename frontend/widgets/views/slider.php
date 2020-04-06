<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 14:28
 */

/* @var $slider common\models\Slider */
/* @var $item common\models\Slider [] */

?>

<?php if($slider): ?>

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
                                             <?php $showed = false; foreach ($slider as $item): ?>
                                                <div class="item <?php if ($slider[0]){ if( !$showed ){
                                                    echo "active";
                                                    $showed = true;
                                                }} ?>" style="background-image: url(<?=$item->getImgUrl()?>);background-position: center center;">
                                                    <div class="carousel-caption">
                                                        <div class="container">
                                                            <div class="box valign-middle">
                                                                <div class="content text-center">
                                                                    <h2 data-animation="animated fadeInUp"><?=$item->name?></h2>
                                                                    <p data-animation="animated fadeInDown"><?=$item->content?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             <?php endforeach;?>
                                        </div>
                                        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i class="fas fa-angle-left"></i> <span class="sr-only">Previous</span> </a>
                                        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fas fa-angle-right"></i> <span class="sr-only">Next</span> </a>
                                        <ul class="carousel-indicators list-inline custom-navigation">
                                            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
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

<?php endif;?>
