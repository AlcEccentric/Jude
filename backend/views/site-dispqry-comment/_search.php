<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the search view file of site-dispqry-ccomment page of backend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryCommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-comment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'comId') ?>

    <?= $form->field($model, 'comContent') ?>

    <?= $form->field($model, 'comStatusId') ?>

    <?= $form->field($model, 'memId') ?>

    <?= $form->field($model, 'userId') ?>

    <?php // echo $form->field($model, 'comTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
