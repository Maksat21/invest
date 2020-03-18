<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancies */

$this->title = Yii::t('backend', 'Update Vacancies: ') . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Vacancies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="vacancies-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
