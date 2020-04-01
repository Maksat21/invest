<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 01.04.20
 * Time: 17:02
 */

/* @var $certificates common\models\Attachments */

use frontend\widgets\CertificatesWidget;
use common\models\Images;

?>
<?php if($certificates): ?>

                                <section class="portfolio-style-two sec-pad">
                                    <div class="container">
                                        <div class="text-center">
                                            <h2><?=$certificates->name?></h2>
                                        </div>
                                        <div class="row masonary-layout filter-layout" data-filter-class="filter">
                                            <?php $itemList = CertificatesWidget::getImage($certificates->id); ?>
                                            <?php foreach ($itemList as $images):?>
                                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                <div class="single-portfolio-style-two">
                                                    <div class="img-box">
                                                            <img src="<?= Images::getPath().$images['path']?>" alt="<?=$certificates->name?>" />
                                                        <div class="overlay">
                                                            <div class="box">
                                                                <div class="content">
                                                                    <a href="<?= Images::getPath().$images['path']?>" class="img-popup"><i class="fa fa-search"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </section>

<?php endif;?>