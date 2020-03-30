<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\widgets\Panel;
use common\models\Materials;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Materials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-index">

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
            'title',
            'description:ntext',
            'type',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function (Materials $model) {
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => Materials::getStatuses()
            ],


            ['class' => '\common\components\grid\ActionColumn',
                'template' => '{update}{delete}'],
        ],
    ]); ?>
    <?php Panel::end() ?>
</div>
