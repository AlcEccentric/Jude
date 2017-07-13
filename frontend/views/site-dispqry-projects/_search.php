<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proId') ?>

    <?= $form->field($model, 'proName') ?>

    <?= $form->field($model, 'proDate') ?>

    <?= $form->field($model, 'proIntro') ?>

    <?= $form->field($model, 'proPosUrl') ?>

    <?php // echo $form->field($model, 'proStatusId') ?>

    <?php // echo $form->field($model, 'memId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
