<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the search style of the backend projects site.

*/
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


    <?= $form->field($model, 'proIntro') ?>

    <?= $form->field($model, 'proPosUrl') ?>

    <?php // echo $form->field($model, 'proStatusId') ?>

    <?php // echo $form->field($model, 'memId') ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
