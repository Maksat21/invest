<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Panel;

/* @var $this yii\web\View */
/* @var $model common\models\Images */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Panel::begin([
    'title' => $this->title,
    'buttonsTemplate' => '{cancel}'
])?>
<div class="images-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'model_type')->dropDownList($model->getType()) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'status')->dropDownList($model->getStatuses()) ?>
        </div>
    </div>

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
                                <span class="btn btn-danger set-main-image" data-model_id="<?= $model->id ?>" data-main_image_id="<?= $attachment->id ?>">Сделать главным</span>
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


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php Panel::end() ?>
