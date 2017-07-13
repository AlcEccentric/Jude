<?php

/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the form view file of site-disp-news page of backend site.
 */ 

/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the form style of the backend news site.

*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SiteQryNewsstatus;
use common\models\SiteDispMembers;
/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newsContent')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model,'newsStatusId')
         ->dropDownList(SiteQryNewsstatus::find()
                        ->select(['newsStatusName','newsStatusId'])
                        ->orderBy('newsStatusPos')
                        ->indexBy('newsStatusId')
                        ->column(),
               ['prompt'=>'请选择状态']);?>



    <?= $form->field($model,'memId')
         ->dropDownList(SiteDispMembers::find()
                        ->select(['nickname','id'])
                        ->orderBy('id')
                        ->indexBy('id')
                        ->column(),
               ['prompt'=>'请选择作者']);?> 

    

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
