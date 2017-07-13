<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the form view file of site-disp-members page of backend site.
 */   
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-disp-members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memAge')->textInput() ?>

    <?= $form->field($model, 'memCol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memDept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
