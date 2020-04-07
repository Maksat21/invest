<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TaredType */

$this->title = Yii::t('backend', 'Create Tared Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Tared Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tared-type-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
