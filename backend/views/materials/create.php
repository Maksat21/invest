<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Materials */

$this->title = Yii::t('backend', 'Create Materials');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
