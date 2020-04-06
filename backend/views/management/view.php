<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;
use common\models\Management;

/* @var $this yii\web\View */
/* @var $model common\models\Management */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Managements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="management-view">

    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}'
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'content',
            'post',
            'email',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'format' => 'html',
                'value' => function (Management $model) {
                    $class = null;
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Panel::end() ?>

</div>
