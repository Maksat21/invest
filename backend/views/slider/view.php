<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Panel;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">
    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}{update}'
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'content',
            'image',
            [
                'attribute' => 'status',
                'value' => $model->getStatusLabel(),
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <?php Panel::end() ?>

</div>
