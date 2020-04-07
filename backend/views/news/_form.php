<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Panel;
use dosamigos\tinymce\TinyMce;
use common\models\Attachments;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Panel::begin([
    'title' => $this->title,
    'buttonsTemplate' => '{cancel}'
])?>
<div class="news-form">
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
                <div class="col-md-12">
                    <?php if (!$model->isNewRecord): ?>

                        <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

                        <?php if ($model->attachments): ?>
                            <table class="table table-bordered">
                                <?php foreach ($model->attachments as $attachment): ?>
                                    <tr>
                                        <td>
                                            <img src="<?= Yii::$app->params['staticDomain'].'/'.$attachment->path ?>" width="120">
                                        </td>
                                        <td>
                                            <?= $attachment->path ?>
                                        </td>
                                        <td>
                                            <?php if ($attachment->is_main): ?>
                                                <span class="btn btn-success">Главное</span>
                                            <?php else: ?>
                                                <span class="btn btn-danger set-main-image" data-model_id="<?= $model->id ?>" data-model_type="<?=Attachments::TYPE_NEWS?>" data-main_image_id="<?= $attachment->id ?>">Сделать главным</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <i class="fa fa-trash delete-image" data-image_id="<?= $attachment->id ?>"></i>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
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
            <?= Html::submitButton(Yii::t('backend', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>


    </div>
</div>
<?php Panel::end() ?>


