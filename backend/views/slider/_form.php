<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Panel;
use common\models\Slider;
use vova07\fileapi\Widget as FileAPI;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Panel::begin([
    'title' => $this->title,
    'buttonsTemplate' => '{cancel}'
])?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'image')->widget(FileAPI::className(), [
                'settings' => [
                    'url' => ['img-upload']
                ]
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList(Slider::getStatuses())?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php Panel::end() ?>