<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the search style of the backend news site.

*/
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

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
