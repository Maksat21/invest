<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Materials */

$this->title = Yii::t('backend', 'Update Material: ') . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="materials-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
