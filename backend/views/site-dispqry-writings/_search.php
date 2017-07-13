<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the search view file of site-dispqry-writings page of backend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryWritingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-writings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wrtId') ?>

    <?= $form->field($model, 'memId') ?>

    <?= $form->field($model, 'wrtDate') ?>

    <?= $form->field($model, 'wrtTitle') ?>

    <?= $form->field($model, 'wrtContent') ?>

    <?php // echo $form->field($model, 'wrtsStatusId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
