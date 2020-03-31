<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 31.03.20
 * Time: 16:05
 */

/* @var $header common\models\Contacts */
?>

<div class="header-top home-three">
    <div class="container">
        <div class="logo pull-left">
            <a href=""> <img src="img/talas-invest-logo.png" alt="Awesome Image"> </a>
        </div>
        <?php if($header): ?>
        <div class="header-right-info pull-right">
            <div class="single-header-right-info">
                <div class="icon-box"> <i class="industrio-icon-phone-call"></i></div>
                <div class="text-box">
                    <p><?= Yii::t('common','Schedule'); ?> 9:00 - 18:00</p>
                    <h3><?=$header->phone?></h3></div>
            </div>
            <div class="single-header-right-info">
                <div class="icon-box"> <i class="industrio-icon-clock"></i></div>
                <div class="text-box">
                    <p>С понедельника по пятницу</p>
                    <h3>9:00 - 18:00</h3></div>
            </div>
            <div class="single-header-right-info">
                <div class="icon-box"> <i class="industrio-icon-envelope"></i></div>
                <div class="text-box">
                    <p>E-mail</p>
                    <h3><?=$header->email?></h3></div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
