<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TaredType */

$this->title = Yii::t('backend', 'Update Tared Type: ') . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Tared Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');;
?>
<div class="tared-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
