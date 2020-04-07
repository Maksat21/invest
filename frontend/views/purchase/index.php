<?php

/* @var $purchase common\models\Purchase */
use yii\helpers\Url;

$this->title = Yii::t('common', 'Purchase');

?>

<div class="inner-banner" style="background: url(<?=Yii::getAlias('@imgPath');?>/t-1.png) repeat fixed 0 0px, rgba(0, 0, 0, 0) url(<?=Yii::getAlias('@imgPath');?>/bg.jpg) no-repeat fixed 0 0 / 100% auto;">
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










