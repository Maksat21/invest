<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;
use common\models\Feedback;

/* @var $this yii\web\View */
/* @var $model common\models\Feedback */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="feedback-view">

    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}'
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'company_name',
            'product_id',
            'quantity',
            'barrel',
            'delivery',
            'full_name',
            'email:email',
            'phone_number',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'format' => 'html',
                'value' => function (Feedback $model) {
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
