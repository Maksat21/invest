<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;
use common\models\Vacancies;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancies */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Vacancies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vacancies-view">

    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}'
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'wage',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'format' => 'html',
                'value' => function (Vacancies $model) {
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
