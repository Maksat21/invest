<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\widgets\Panel;
use common\models\Feedback;
use common\models\TaredType;
use common\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Feedbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">


    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{create}'
    ])?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function (Feedback $model) {
                    if ($model->status === $model::STATUS_NOT_REVIEWED) {
                        $class = 'label-warning';
                    } else if ($model->status === $model::STATUS_REVIEWED) {
                        $class = 'label-success';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => Feedback::getStatuses()
            ],
            //'delivery',
            //'full_name',
            //'email:email',
            //'phone_number',
            //'created_at',
            //'updated_at',

            ['class' => '\common\components\grid\ActionColumn',
                'template' => '{update}{delete}'],
        ],
    ]); ?>
    <?php Panel::end() ?>
</div>
