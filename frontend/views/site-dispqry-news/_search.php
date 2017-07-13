<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'newsId') ?>

    <?= $form->field($model, 'newsTitle') ?>

    <?= $form->field($model, 'newsContent') ?>

    <?= $form->field($model, 'newsStatusId') ?>

    <?= $form->field($model, 'memId') ?>

    <?php // echo $form->field($model, 'newsDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
