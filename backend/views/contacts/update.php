<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */

$this->title = Yii::t('backend', 'Update Contacts: ') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="contacts-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
