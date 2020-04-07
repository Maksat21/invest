<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;
use common\models\Feedback;
use common\models\Product;
use common\models\TaredType;

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
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return Product::findOne(['id' => $model->product_id])->name;
                },
            ],
            'quantity',
            [
                'attribute' => 'barrel',
                'value' => function ($model) {
                    return TaredType::findOne(['id' => $model->barrel])->name;
                },
            ],
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
                    if ($model->status === $model::STATUS_NOT_REVIEWED) {
                        $class = 'label-warning';
                    } else if ($model->status === $model::STATUS_REVIEWED) {
                        $class = 'label-success';
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
