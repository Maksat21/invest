<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Panel;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model common\models\Materials */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Panel::begin([
    'title' => $this->title,
    'buttonsTemplate' => '{cancel}'
])?>
<div class="purchase-form">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
        <li><a href="#seo" data-toggle="tab">SEO</a></li>
    </ul>

    <?php $form = ActiveForm::begin(); ?>

    <div class="tab-content">
        <div class="tab-pane fade in active" id="main">

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]);?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'type')->dropDownList($model->getType()) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'status')->dropDownList($model->getStatuses()) ?>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="seo">
            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'meta_description')->textarea(['rows' => 6, 'maxlength' => true]) ?>
            <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 6, 'maxlength' => true]) ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t(Yii::t('backend','Save'), 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>


    </div>
</div>
<?php Panel::end() ?>

