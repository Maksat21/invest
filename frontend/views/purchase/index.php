<?php

/* @var $purchase common\models\Purchase */
use yii\helpers\Url;

$this->title = Yii::t('common', 'Purchase');
$this->registerMetaTag(['name' => 'title', 'content' => Yii::t('common', 'Purchase')]);
$this->registerMetaTag(['name' => 'description', 'content' => $purchase[1]['meta_description']]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $purchase[1]['meta_keywords']]);

?>

<div class="inner-banner" style="background: url(http://shtheme.com/demosd/industrio1/wp-content/uploads/2018/12/inner-banner-1-1.jpg) center center no-repeat;">
    <div class="container">
        <h3><?= Yii::t('common','Purchase'); ?></h3>
        <ul class="breadcumb">
            <li><a href="<?= Url::to('/')?>"><?= Yii::t('common','Home'); ?></a></li>
            <li><span class="sep"><i class="fa fa-angle-right"></i></span></li>
            <li><span><?= Yii::t('common','Products'); ?></span></li>
        </ul>
    </div>
</div>
<?php if ($purchase):?>
<div class="full_width padtb_100_20 woocommerce shop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <table>
                        <caption>
                            Закупки
                        </caption>
                        <tr>
                            <th>Наименование</th>
                            <th>Описание</th>
                            <th>Количество</th>
                            <th>Срок поставки</th>
                        </tr>
                         <?php foreach ($purchase as $item): ?>
                        <tr>
                            <td><?=$item->name?></td>
                            <td><?=$item->content?></td>
                            <td><?=$item->quantity?></td>
                            <td><?=$item->delivery_time?></td>
                        </tr>
                         <?php endforeach; ?>
                    </table>
            </div>
        </div>
    </div>
</div>
<?php endif;?>










