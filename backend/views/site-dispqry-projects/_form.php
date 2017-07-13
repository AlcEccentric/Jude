<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the form style of the backend projects site.

*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SiteQryProstatus;
use common\models\SiteDispMembers;
/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'proName')->textInput(['maxlength' => true]) ?>




    <?= $form->field($model, 'proIntro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proPosUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'proStatusId')
         ->dropDownList(SiteQryProstatus::find()
                        ->select(['proStatusName','proStatusId'])
                        ->orderBy('proStatusPos')
                        ->indexBy('proStatusId')
                        ->column(),
               ['prompt'=>'请选择状态']);?>

    <?= $form->field($model,'memId')
         ->dropDownList(SiteDispMembers::find()
                        ->select(['nickname','id'])
                        ->orderBy('id')
                        ->indexBy('id')
                        ->column(),
               ['prompt'=>'请选择完成者']);?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
