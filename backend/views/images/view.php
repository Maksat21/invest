<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;
use common\models\Images;

/* @var $this yii\web\View */
/* @var $model common\models\Images */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="images-view">

    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}'
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'model_type',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->getTypeLabel();
                }
            ],
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'format' => 'html',
                'value' => function (Images $model) {
                    $class = null;
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
            ],
        ],
    ]) ?>

    <?php if ($model->attachments): ?>
        <table class="table table-bordered">
            <tr>
                <td><?=Yii::t('backend','Image')?></td>
                <td><?=Yii::t('backend','Name')?></td>
            </tr>
            <?php foreach ($model->attachments as $attachment): ?>
                <tr>
                    <td>
                        <img src="<?= Yii::$app->params['staticDomain'].'/'.$attachment->path ?>" width="120">
                    </td>
                    <td>
                        <?= $attachment->path ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php endif; ?>

    <?php Panel::end() ?>


</div>
