<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the form view file of site-dispqry-news page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newsContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newsStatusId')->textInput() ?>

    <?= $form->field($model, 'memId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
