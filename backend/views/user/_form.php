<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the form view file of user page of backend site.
 */ 

/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the form style of the backend user site.

*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\user;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(User::allStatus(),
            ['prompt'=>'请选择状态']);  
     ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
