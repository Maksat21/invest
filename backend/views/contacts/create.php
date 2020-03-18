<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */

$this->title = Yii::t('backend', 'Create Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
