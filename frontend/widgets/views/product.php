<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 03.04.20
 * Time: 12:27
 */

/* @var $product common\models\Product */

use frontend\widgets\ProductWidget;
use common\models\Attachments;
use common\models\Product;
?>


<?php if($product): ?>

    <section class="elementor-element elementor-element-af55874 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="af55874" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-87dae3d elementor-column elementor-col-100 elementor-top-column" data-id="87dae3d" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-b1bc733 elementor-align-left elementor-widget elementor-widget-bdevs-testimonial" data-id="b1bc733" data-element_type="widget" data-widget_type="bdevs-testimonial.default">
                                <div class="elementor-widget-container">
                                    <section class="testimonials-style-three" style="background: #000 url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2019/01/testi-bg.jpg) center center no-repeat fixed;">
                                        <div class="container">
                                            <div class="sec-title light">
                                                <h3>НАША <span>ПРОДУКЦИЯ</span></h3></div>
                                            <div class="testimonials-style-three-carousel owl-theme owl-carousel">
                                                <?php foreach ($product as $item): ?>
                                                <div class="single-testimonials-style-three">
                                                    <?php $itemList = ProductWidget::getImage($item->id,Attachments::MAIN);
                                                    if($itemList):?>
                                                         <div class="img-box"> <img src="<?= Product::getPath().$itemList[0]['path']?>" alt="Awesome Image" /></div>
                                                    <?php else:?>
                                                        <div class="img-box"> <img src="<?= Product::getPath().'default.png'?>" alt="Awesome Image" /></div>
                                                    <?php endif;?>

                                                    <div class="text-box">
                                                        <div class="product-name"><h2><?=$item->name?></h2></div>
                                                        <p><?=$item->content?></p>
                                                        <div class="product-apply">
                                                            <p><a href="#myModal" class="btn btn-success" data-toggle="modal">Оставить заявку</a></p>
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
