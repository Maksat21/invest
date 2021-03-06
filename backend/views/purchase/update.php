<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Purchase */

$this->title = Yii::t('backend', 'Update Purchase: ') . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Purchases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="purchase-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
