<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Management */

$this->title = Yii::t('backend','Create Management');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend','Managements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="management-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
