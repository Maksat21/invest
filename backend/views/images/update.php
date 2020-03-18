<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Images */

$this->title = Yii::t('backend', 'Update Images: ') . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="images-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
