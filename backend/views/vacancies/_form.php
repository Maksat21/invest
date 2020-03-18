<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Panel;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancies */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Panel::begin([
    'title' => $this->title,
    'buttonsTemplate' => '{cancel}'
])?>
<div class="vacancies-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'wage')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'status')->dropDownList($model->getStatuses()) ?>
        </div>
    </div>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php Panel::end() ?>
