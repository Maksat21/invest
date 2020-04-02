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

$this->title = Yii::t('common', 'Apply');
?>

<?php

Modal::begin([
    'header' => '<h2>Оставить заявку!</h2>',
    'toggleButton' => [
        'label' => '<p>Оставить заявку</p>',
        'tag' => 'button',
        'class' => 'btn btn-success btn-request',
    ],
]);
?>



<div class="">

    <?= Alert::widget() ?>
    <h1><?= Yii::t('common','Apply'); ?></h1>
    <p><?= Yii::t('common','Fill in the following fields to send a request'); ?></p>
    <?php $form = ActiveForm::begin(['id' => 'feedback-form']); ?>

    <?= $form->field($model, 'company_name')->label(false)->textInput() ?>

    <?= $form->field($model, 'product_id')->label(false)->textInput() ?>

    <?= $form->field($model, 'quantity')->label(false)->textInput() ?>

    <?= $form->field($model, 'barrel')->label(false)->textInput() ?>

    <?= $form->field($model, 'delivery')->label(false)->textInput() ?>

    <?= $form->field($model, 'full_name')->label(false)->textInput(['placeholder' => Yii::t('common','Indicate Name').' *']) ?>

    <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => Yii::t('common','Indicate email').' *']) ?>

    <?= $form->field($model, 'phone_number')->label(false)->textInput(['placeholder' => Yii::t('common','Indicate phone').' *']) ?>

    <p style="color: #646e73">* - <?= Yii::t('common','Required fields'); ?></p>
    <div class="form-group">
        <?= Html::submitButton( Yii::t('common','Send Request'), ['class' => 'btn btn-danger btn-block', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>


<?php Modal::end(); ?>






