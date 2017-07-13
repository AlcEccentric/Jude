<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the guestform view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin([
    		'action'=>['site-disp-members/detail','id'=>$id],
    		'method'=>'post',
    		]); ?>

    
    <div class="row">
    	<div class="col-md-12"><?= $form->field($commentModel,'comContent')->textarea(['row'=>0])?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('发表评论', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>