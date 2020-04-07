<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\TaredType;
use common\widgets\Panel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaredTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Tared Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tared-type-index">

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
            'name',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function (TaredType $model) {
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => TaredType::getStatuses()
            ],
//            'created_at',
//            'updated_at',

            ['class' => '\common\components\grid\ActionColumn',
                'template' => '{update}{delete}'],
        ],
    ]); ?>
    <?php Panel::end() ?>
</div>
