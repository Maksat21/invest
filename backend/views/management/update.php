<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Management */

$this->title = Yii::t('backend', 'Update Management: ') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Managements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="management-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
