<?php
/**
 * Created by PhpStorm.
 * User: maks
 * Date: 19.03.20
 * Time: 13:03
 */

/* @var $contact common\models\Contacts */
?>

<section class="contact-info-style-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3>Связаться с <span>нами</span></h3>
                    <p>Мы, за внедрение прогрессивных технологий, способствующих улучшению продукта и экологической безопасности производства.</p>
                </div>
            </div>
            <?php if($contact): ?>
            <div class="col-md-6">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <i class="industrio-icon-phone-call"></i></div>
                        <div class="text-box">
                            <h3><?= Yii::t('common','Call Us On'); ?></h3>
                            <p><?=$contact->phone?></p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <i class="industrio-icon-envelope"></i></div>
                        <div class="text-box">
                            <h3><?= Yii::t('common','Email Us'); ?></h3>
                            <p><?=$contact->email?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
