<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Purchase */

$this->title = Yii::t('backend', 'Create Purchase');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Purchases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
