<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\widgets\Panel;
use common\models\Vacancies;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VacanciesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Vacancies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancies-index">

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
            'description',
            'wage',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function (Vacancies $model) {
                    if ($model->status === $model::STATUS_PUBLISHED) {
                        $class = 'label-success';
                    } else if ($model->status === $model::STATUS_NOT_PUBLISHED) {
                        $class = 'label-warning';
                    }
                    return Html::tag('span', $model->getStatusLabel(), ['class' => 'label ' . $class]);
                },
                'filter' => Vacancies::getStatuses()
            ],
            //'created_at',
            //'updated_at',

            ['class' => '\common\components\grid\ActionColumn',
                'template' => '{update}{delete}'],
        ],
    ]); ?>

    <?php Panel::end() ?>
</div>
