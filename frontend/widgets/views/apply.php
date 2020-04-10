<?php
/**
 * Created by PhpStorm.
 * User: maksat
 * Date: 02.04.20
 * Time: 11:16
 */



/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\forms\FeedbackForm */


use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\TaredType;

$this->title = Yii::t('common', 'Apply');
?>

<?php

Modal::begin([
    'toggleButton' => [
        'label' => '<p>Оставить заявку</p>',
        'tag' => 'button',
        'class' => 'btn btn-success btn-request',
    ],
]);
?>



<div class="">


    <h1><?= Yii::t('common','Apply'); ?></h1>
    <p><?= Yii::t('common','Fill in the following fields to send a request'); ?></p>
    <?php $form = ActiveForm::begin(['id' => 'feedback-form']); ?>

    <?= $form->field($model, 'company_name')->label()->textInput(['placeholder' => Yii::t('common','Indicate Company Name')]) ?>

    <?= $form->field($model, 'product_id')->label()->dropDownList(ArrayHelper::map(Product::find()->where(['status'=> Product::STATUS_PUBLISHED])->asArray()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'quantity')->label()->textInput(['placeholder' => Yii::t('common','Indicate Quantity')]) ?>

    <?= $form->field($model, 'barrel')->label()->dropDownList(ArrayHelper::map(TaredType::find()->where(['status'=> TaredType::STATUS_PUBLISHED])->asArray()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'delivery')->label()->textInput(['placeholder' => Yii::t('common','Indicate Delivery')]) ?>

    <?= $form->field($model, 'full_name')->label()->textInput(['placeholder' => Yii::t('common','Indicate Name').' *']) ?>

    <?= $form->field($model, 'email')->label()->textInput(['placeholder' => Yii::t('common','Indicate Email').' *']) ?>

    <?= $form->field($model, 'phone_number')->label()->textInput(['placeholder' => Yii::t('common','Indicate Phone').' *']) ?>

    <p style="color: #646e73">* - <?= Yii::t('common','Required fields'); ?></p>
    <div class="form-group">
        <?= Html::submitButton( Yii::t('common','Send Request'), ['class' => 'btn btn-success btn-block', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>


<?php Modal::end(); ?>






