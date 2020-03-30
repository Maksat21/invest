<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-template page-template-page-templates page-template-home-green page-template-page-templateshome-green-php page page-id-554 wpb-js-composer js-comp-ver-5.4.7 vc_responsive elementor-default elementor-page elementor-page-554">
<?php $this->beginBody() ?>

<div class="page-wrapper">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

</div>

<footer class="site-footer fixed-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <a href="http://shtheme.net/demosd/industrio/"><img src="http://shtheme.net/demosd/industrio/wp-content/uploads/2018/12/logo2-1.png" alt="Awesome Image" /></a>
                        <h3>About us</h3> Many of our SELC registered employees are requested as main preferred temporary staff when a service.</div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3>Links</h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=157">About Us</a></li>
                                <li><a href="index.html@page_id=229.html">Services</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=243">Project</a></li>
                                <li><a href="index.html#">Pages</a></li>
                                <li><a href="index.html@page_id=24.html">Blog</a></li>
                                <li><a href="http://shtheme.com/demosd/industrio1/?page_id=175">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget services-widget">
                        <div class="textwidget">
                            <div class="title">
                                <h3>Services</h3></div>
                            <p></p>
                            <ul class="links-list">
                                <li><a href="index.html#">Engineering</a></li>
                                <li><a href="index.html#">Petrolium &amp; Gas</a></li>
                                <li><a href="index.html#">Power &amp; Engergy</a></li>
                                <li><a href="index.html#">Mechanical Engineering</a></li>
                                <li><a href="index.html#">Agricultural Processing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget subscribe-widget">
                        <div class="textwidget">
                            <h3>Subscribe Today</h3>
                            <p>Many of our SELC registered employees are requested as main</p>
                            <div role="form" class="wpcf7" id="wpcf7-f239-o2" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="index.html#wpcf7-f239-o2" method="post" class="wpcf7-form rqa-form contact-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="239" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f239-o2" />
                                        <br />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    </div>
                                    <div class="subscribe-form"> <span class="wpcf7-form-control-wrap email"><input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email Address" /></span>
                                        <br />
                                        <input type="submit" value="Subscribe" class="wpcf7-form-control wpcf7-submit hvr-sweep-to-right" />
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="left-text pull-left">
                <p> © Copyright Industrio 2019. All right reserved.</p>
            </div>
            <div class="right-text pull-right">
                <p> Created by Shtheme</p>
            </div>
        </div>
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
