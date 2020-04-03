<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 02.04.20
 * Time: 11:06
 */

use yii\helpers\Html; ?>

<div class="feedBack">
    <h3><?= Yii::t('common', 'Application Form');?> №<?= Html::encode($model->id) ?></h3>
    <p><small><?= Yii::t('common', 'Company Name');?>:</small> <strong><?= Html::encode($model->company_name) ?></strong></p>
    <p><small><?= Yii::t('common', 'Product ID');?>:</small> <strong><?= Html::encode($model->product_id) ?></strong></p>
    <p><small><?= Yii::t('common', 'Barrel');?>:</small> <strong><?= Html::encode($model->barrel) ?></strong></p>
    <p><small><?= Yii::t('common', 'Delivery');?>:</small> <strong><?= Html::encode($model->delivery) ?></strong></p>
    <p><small><?= Yii::t('common', 'Full Name');?>:</small> <strong><?= Html::encode($model->full_name) ?></strong></p>
    <p><small><?= Yii::t('common', 'Email');?>:</small> <strong><?= Html::encode($model->email) ?></strong></p>
    <p><small><?= Yii::t('common', 'Phone Number');?>:</small> <strong><?= Html::encode($model->phone_number) ?></strong></p>
    <p><small><?= Yii::t('common', 'Date');?>:</small> <strong><?= Yii::$app->formatter->asDatetime($model->created_at) ?></strong></p>
</div>