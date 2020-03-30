<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\widgets\Panel;
use common\models\Images;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Images');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-index">

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
                'attribute' => 'model_type',
                'format' => 'html',
                'value' => function (Images $model) {
                    if ($model->model_type === $model::TYPE_GALLERY) {
                        $class = 'label-primary';
                    } else if ($model->model_type === $model::TYPE_CERTIFICATE) {
                        $class = 'label-info';
                    }
                    return Html::tag('span', $model->getTypeLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => Images::getType()
            ],
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function (Images $model) {
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => Images::getStatuses()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Panel::end() ?>
</div>
