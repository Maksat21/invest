<?php

use common\widgets\Panel;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <?php Panel::begin([
        'title' => $this->title,
        'buttonsTemplate' => '{delete}{cancel}'
    ])?>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
        <li><a href="#seo" data-toggle="tab">MetaTags</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="main">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><?=Yii::t('backend','ID') ?></td>
                    <td><?= $model->id ?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('backend','Name') ?></td>
                    <td><?= $model->name ?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('backend','Content') ?></td>
                    <td><?= $model->content ?></td>
                </tr>
                <?php if ($model->attachments): ?>
                    <tr>
                        <td><?=Yii::t('backend','Image')?></td>
                        <td><?=Yii::t('backend','Name')?></td>
                    </tr>
                    <?php foreach ($model->attachments as $attachment): ?>
                        <tr>
                            <td>
                                <img src="<?= Yii::$app->params['staticDomain'].'/'.$attachment->path ?>" width="120">
                            </td>
                            <td>
                                <?= $attachment->path ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php endif; ?>
                <tr>
                    <td><?=Yii::t('backend','Created At') ?></td>
                    <td><?= Yii::$app->formatter->asDatetime($model->created_at,'php:Y-m-d H:i:s') ?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('backend','Updated At') ?></td>
                    <td><?= Yii::$app->formatter->asDatetime($model->updated_at,'php:Y-m-d H:i:s') ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade in" id="seo">
            <table class="table">
                <tbody>
                <tr>
                    <td><?=Yii::t('backend','Meta Title') ?></td>
                    <td><?= $model->meta_title?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('backend','Meta Description') ?></td>
                    <td><?= $model->meta_description?></td>
                </tr>
                <tr>
                    <td><?=Yii::t('backend','Meta Keywords') ?></td>
                    <td><?= $model->meta_keywords ?></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <?php Panel::end() ?>

</div>
